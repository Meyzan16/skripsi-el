<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_gangguan_sosial;

use Illuminate\Http\Request;

class SubGangguanSosialController extends Controller
{
    
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_gangguan_sosial = $request->nama_kriteria_gangguan_sosial;
        $nilai_gangguan_sosial = $request->nilai_gangguan_sosial;
        sub_gangguan_sosial::create([
            'kode_kriteria' => 'C9',
            'nama_sub_kriteria' => $sub_gangguan_sosial,
            'nilai' => $nilai_gangguan_sosial,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
       

        // luas genangan
        $sub_gangguan_sosial = $request->nama_kriteria_gangguan_sosial;
        $nilai_gangguan_sosial = $request->nilai_gangguan_sosial;

        $item = sub_gangguan_sosial::where('id_gangguan_sosial', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_gangguan_sosial,
            'nilai' => $nilai_gangguan_sosial,
        ]); 
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }
   

    public function destroy($id)
    {
        sub_gangguan_sosial::where('id_gangguan_sosial', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
