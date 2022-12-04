<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\tb_data_alternatif;
use App\Models\tb_proses_kalkulasi;
use Illuminate\Http\Request;



class DataAlternatifController extends Controller
{
    
    public function index()
    {
        $alternatif = tb_data_alternatif::all();

        return view('Admin.main.data-alternatif', compact('alternatif'));
    }

    public function store(Request $request)
    {
        //tinggi genangan
        $nama_daerah = $request->nama_daerah;
        $kecamatan = $request->kecamatan;
        tb_data_alternatif::create([
            'nama_daerah' => $nama_daerah,
            'kecamatan' => $kecamatan,
        ]);

        $data = tb_data_alternatif::orderBy('id', 'desc')->limit(1)->first();   

        tb_proses_kalkulasi::create([
            'id_alternatif' => $data->id,
        ]); 


        return redirect()->route('data-alternatif.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {

        $nama_daerah = $request->nama_daerah;
        $kecamatan = $request->kecamatan;

        $item = tb_data_alternatif::where('id', $id);
        $item->update([
            'nama_daerah' => $nama_daerah,
            'kecamatan' => $kecamatan,
        ]); 




        return redirect()->route('data-alternatif.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        tb_data_alternatif::where('id', $id)->delete();   
        tb_proses_kalkulasi::where('id_alternatif', $id)->delete();   
        return redirect()->route('data-alternatif.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
