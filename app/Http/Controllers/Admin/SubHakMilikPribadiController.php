<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_hak_milik_pribadi;

use Illuminate\Http\Request;

class SubHakMilikPribadiController extends Controller
{
    
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_hak_milik_pribadi = $request->nama_kriteria_hak_milik_pribadi;
        $nilai_hak_milik_pribadi = $request->nilai_hak_milik_pribadi;
        sub_hak_milik_pribadi::create([
            'kode_kriteria' => 'C9',
            'nama_sub_kriteria' => $sub_hak_milik_pribadi,
            'nilai' => $nilai_hak_milik_pribadi,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
       

        // luas genangan
        $sub_hak_milik_pribadi = $request->nama_kriteria_hak_milik_pribadi;
        $nilai_hak_milik_pribadi = $request->nilai_hak_milik_pribadi;

        $item = sub_hak_milik_pribadi::where('id_hak_milik_pribadi', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_hak_milik_pribadi,
            'nilai' => $nilai_hak_milik_pribadi,
        ]); 
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }
   

    public function destroy($id)
    {
        sub_hak_milik_pribadi::where('id_hak_milik_pribadi', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
