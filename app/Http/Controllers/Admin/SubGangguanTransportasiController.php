<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\sub_gangguan_transportasi;

use Illuminate\Http\Request;;

class SubGangguanTransportasiController extends Controller
{
    public function store(Request $request)
    {
        //tinggi genangan
        $sub_gangguan_transportasi = $request->nama_kriteria_gangguan_transportasi;
        $nilai_gangguan_transportasi = $request->nilai_gangguan_transportasi;
        sub_gangguan_transportasi::create([
            'kode_kriteria' => 'C7',
            'nama_sub_kriteria' => $sub_gangguan_transportasi,
            'nilai' => $nilai_gangguan_transportasi,
        ]);


        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil Di simpan']);
    }

    
    
    public function update(Request $request, $id)
    {
       

        // luas genangan
        $sub_gangguan_transportasi = $request->nama_kriteria_gangguan_transportasi;
        $nilai_gangguan_transportasi = $request->nilai_gangguan_transportasi;

        $item = sub_gangguan_transportasi::where('id_gangguan_transportasi', $id);
        $item->update([
            'nama_sub_kriteria' => $sub_gangguan_transportasi,
            'nilai' => $nilai_gangguan_transportasi,
        ]); 




        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

    

    public function destroy($id)
    {
        sub_gangguan_transportasi::where('id_gangguan_transportasi', $id)->delete();   
        return redirect()->route('data-sub-kriteria.index')->with(['success' =>  'Data Berhasil dihapus']);
    }
}
