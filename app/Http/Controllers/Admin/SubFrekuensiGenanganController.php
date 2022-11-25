<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_frekuensi_genangan;

use Illuminate\Http\Request;;

class SubFrekuensiGenanganController extends Controller
{
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_frekuensi_genangan = $request->nama_kriteria_frekuensi_genangan;
        $nilai_frekuensi_genangan = $request->nilai_frekuensi_genangan;
        sub_frekuensi_genangan::create([
            'kode_kriteria' => 'C4',
            'nama_sub_kriteria' => $sub_frekuensi_genangan,
            'nilai' => $nilai_frekuensi_genangan,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
        // luas genangan
        $sub_frekuensi_genangan = $request->nama_kriteria_frekuensi_genangan;
        $nilai_frekuensi_genangan = $request->nilai_frekuensi_genangan;

        $item = sub_frekuensi_genangan::where('id_frekuensi_genangan', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_frekuensi_genangan,
            'nilai' => $nilai_frekuensi_genangan,
        ]); 
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        sub_frekuensi_genangan::where('id_frekuensi_genangan', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
