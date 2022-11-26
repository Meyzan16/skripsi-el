<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\tb_data_alternatif;
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
        return redirect()->route('data-alternatif.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
