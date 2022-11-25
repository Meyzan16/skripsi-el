<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_luas_genangan;
use App\Models\sub_tinggi_genangan;
use App\Models\sub_lamanya_genangan;

use Illuminate\Http\Request;

class DataSubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tinggi_genangan = sub_tinggi_genangan::all();
        $luas_genangan = sub_luas_genangan::all();
        $lamanya_genangan = sub_lamanya_genangan::all();

        return view('Admin.main.subkriteria', compact('tinggi_genangan', 'luas_genangan' , 'lamanya_genangan'));
    }

    public function store(Request $request)
    {
        //tinggi genangan
        $sub_tinggi_genangan = $request->nama_kriteria_tinggi_genangan;
        $nilai_tinggi_genangan = $request->nilai_tinggi_genangan;

        sub_tinggi_genangan::create([
            'kode_kriteria' => 'C1',
            'nama_sub_kriteria' => $sub_tinggi_genangan,
            'nilai' => $nilai_tinggi_genangan,
        ]);



        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
        $sub_tinggi_genangan = $request->nama_kriteria_tinggi_genangan;
        $nilai_tinggi_genangan = $request->nilai_tinggi_genangan;

        $item = sub_tinggi_genangan::where('id_tinggi_genangan', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_tinggi_genangan,
            'nilai' => $nilai_tinggi_genangan,

        ]); 

        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        sub_tinggi_genangan::where('id_tinggi_genangan', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
