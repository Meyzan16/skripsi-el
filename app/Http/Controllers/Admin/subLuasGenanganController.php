<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_luas_genangan;

use Illuminate\Http\Request;

class subLuasGenanganController extends Controller
{
    
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_luas_genangan = $request->nama_kriteria_luas_genangan;
        $nilai_luas_genangan = $request->nilai_luas_genangan;
        sub_luas_genangan::create([
            'kode_kriteria' => 'C2',
            'nama_sub_kriteria' => $sub_luas_genangan,
            'nilai' => $nilai_luas_genangan,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
       

        // luas genangan
        $sub_luas_genangan = $request->nama_kriteria_luas_genangan;
        $nilai_luas_genangan = $request->nilai_luas_genangan;

        $item = sub_luas_genangan::where('id_luas_genangan', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_luas_genangan,
            'nilai' => $nilai_luas_genangan,
        ]); 




        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        sub_luas_genangan::where('id_luas_genangan', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
