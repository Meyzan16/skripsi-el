<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_kerugian_daerah_perumahan;

use Illuminate\Http\Request;;

class SubKerugianDaerahPerumahanController extends Controller
{
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_kerugian_daerah_perumahan = $request->nama_kriteria_kerugian_daerah_perumahan;
        $nilai_kerugian_daerah_perumahan = $request->nilai_kerugian_daerah_perumahan;
        sub_kerugian_daerah_perumahan::create([
            'kode_kriteria' => 'C8',
            'nama_sub_kriteria' => $sub_kerugian_daerah_perumahan,
            'nilai' => $nilai_kerugian_daerah_perumahan,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
        // luas genangan
        $sub_kerugian_daerah_perumahan = $request->nama_kriteria_kerugian_daerah_perumahan;
        $nilai_kerugian_daerah_perumahan = $request->nilai_kerugian_daerah_perumahan;

        $item = sub_kerugian_daerah_perumahan::where('id_kerugian_daerah_perumahan', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_kerugian_daerah_perumahan,
            'nilai' => $nilai_kerugian_daerah_perumahan,
        ]); 
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        sub_kerugian_daerah_perumahan::where('id_kerugian_daerah_perumahan', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
