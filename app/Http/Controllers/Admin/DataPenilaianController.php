<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\tb_proses_kalkulasi;
use App\Models\sub_tinggi_genangan;
use App\Models\sub_luas_genangan;
use App\Models\sub_lamanya_genangan;
use App\Models\sub_frekuensi_genangan;
use App\Models\sub_kerugian_ekonomi;
use App\Models\sub_gangguan_sosial;
use App\Models\sub_gangguan_transportasi;
use App\Models\sub_kerugian_daerah_perumahan;
use App\Models\sub_hak_milik_pribadi;

use Illuminate\Http\Request;

class DataPenilaianController extends Controller
{
    public function index()
    {
        $proses_kalkulasi = tb_proses_kalkulasi::with(['tb_data_alternatif'])->get();
        $tinggi_genangan = sub_tinggi_genangan::all();
        $luas_genangan = sub_luas_genangan::all();
        $lamanya_genangan = sub_lamanya_genangan::all();
        $frekuensi_genangan = sub_frekuensi_genangan::all();
        $kerugian_ekonomi = sub_kerugian_ekonomi::all();
        $gangguan_sosial = sub_gangguan_sosial::all();
        $gangguan_transportasi = sub_gangguan_transportasi::all();
        $kerugian_daerah_perumahan = sub_kerugian_daerah_perumahan::all();
        $hak_milik_pribadi = sub_hak_milik_pribadi::all();

        return view('Admin.main.data-penilaian', compact('proses_kalkulasi',
        'tinggi_genangan','luas_genangan','lamanya_genangan','frekuensi_genangan',
        'kerugian_ekonomi','gangguan_sosial','gangguan_transportasi','kerugian_daerah_perumahan','hak_milik_pribadi'));
    }

    public function update(Request $request, $id)
    {

        // $a = $request->all();

        // return $a;
        $id_tinggi_genangan = $request->id_tinggi_genangan;
        $id_luas_genangan = $request->id_luas_genangan;
        $id_lamanya_genangan = $request->id_lamanya_genangan;
        $id_kerugian_ekonomi = $request->id_kerugian_ekonomi;
        $id_kerugian_daerah_perumahan = $request->id_kerugian_daerah_perumahan;
        $id_frekuensi_genangan = $request->id_frekuensi_genangan;
        $id_gangguan_transportasi = $request->id_gangguan_transportasi;
        $id_hak_milik_pribadi = $request->id_hak_milik_pribadi;
        $id_gangguan_sosial = $request->id_gangguan_sosial;

        $item = tb_proses_kalkulasi::where('id', $id);
        $item->update([
            'id_tinggi_genangan' => $id_tinggi_genangan,
            'id_luas_genangan' => $id_luas_genangan,
            'id_lamanya_genangan' => $id_lamanya_genangan,
            'id_frekuensi_genangan' => $id_frekuensi_genangan,
            'id_kerugian_ekonomi' => $id_kerugian_ekonomi,
            'id_gangguan_sosial' => $id_gangguan_sosial,
            'id_gangguan_transportasi' => $id_gangguan_transportasi,
            'id_kerugian_daerah_perumahan' => $id_kerugian_daerah_perumahan,
            'id_hak_milik_pribadi' => $id_hak_milik_pribadi,
        ]); 

        return redirect()->route('data-penilaian.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

}
