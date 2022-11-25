<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_lamanya_genangan;

use Illuminate\Http\Request;;

class SubLamanyaGenanganController extends Controller
{
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_lamanya_genangan = $request->nama_kriteria_lamanya_genangan;
        $nilai_lamanya_genangan = $request->nilai_lamanya_genangan;
        sub_lamanya_genangan::create([
            'kode_kriteria' => 'C3',
            'nama_sub_kriteria' => $sub_lamanya_genangan,
            'nilai' => $nilai_lamanya_genangan,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
        // lamanya genangan
        $sub_lamanya_genangan = $request->nama_kriteria_lamanya_genangan;
        $nilai_lamanya_genangan = $request->nilai_lamanya_genangan;

        $item = sub_lamanya_genangan::where('id_lamanya_genangan', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_lamanya_genangan,
            'nilai' => $nilai_lamanya_genangan,
        ]); 
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }


    public function destroy($id)
    {
        sub_lamanya_genangan::where('id_lamanya_genangan', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
