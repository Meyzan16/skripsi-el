<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_luas_genangan;
use App\Models\sub_tinggi_genangan;
use App\Models\sub_lamanya_genangan;
use App\Models\sub_kerugian_ekonomi;
use App\Models\sub_kerugian_daerah_perumahan;
use App\Models\sub_frekuensi_genangan;
use App\Models\sub_gangguan_transportasi;
use App\Models\sub_hak_milik_pribadi;
use App\Models\sub_gangguan_sosial;

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
        $kerugian_ekonomi = sub_kerugian_ekonomi::all();
        $kerugian_daerah_perumahan = sub_kerugian_daerah_perumahan::all();
        $frekuensi_genangan = sub_frekuensi_genangan::all();
        $gangguan_transportasi = sub_gangguan_transportasi::all();
        $hak_milik_pribadi = sub_hak_milik_pribadi::all();
        $gangguan_sosial = sub_gangguan_sosial::all();

        return view('Admin.main.subkriteria', compact('gangguan_sosial', 'hak_milik_pribadi', 'tinggi_genangan', 'luas_genangan' , 'lamanya_genangan' , 'kerugian_ekonomi', 'frekuensi_genangan', 'gangguan_transportasi', 'kerugian_daerah_perumahan'));
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
