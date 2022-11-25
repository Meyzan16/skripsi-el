<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_kerugian_ekonomi;

use Illuminate\Http\Request;;

class SubKerugianEkonomiController extends Controller
{
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_kerugian_ekonomi = $request->nama_kriteria_kerugian_ekonomi;
        $nilai_kerugian_ekonomi = $request->nilai_kerugian_ekonomi;
        sub_kerugian_ekonomi::create([
            'kode_kriteria' => 'C5',
            'nama_sub_kriteria' => $sub_kerugian_ekonomi,
            'nilai' => $nilai_kerugian_ekonomi,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
       

        // luas genangan
        $sub_kerugian_ekonomi = $request->nama_kriteria_kerugian_ekonomi;
        $nilai_kerugian_ekonomi = $request->nilai_kerugian_ekonomi;

        $item = sub_kerugian_ekonomi::where('id_kerugian_ekonomi', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_kerugian_ekonomi,
            'nilai' => $nilai_kerugian_ekonomi,
        ]); 




        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        sub_kerugian_ekonomi::where('id_kerugian_ekonomi', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
