<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\tb_data_kriteria;

class DatakriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = tb_data_kriteria::all();

        return view('Admin.main.datakriteria', compact('data'));
    }

  

   
    public function update(Request $request, $id)
    {
        tb_data_kriteria::where('kode_kriteria', $id)->update([
            'nama_kriteria' => $request->nama_kriteria,
            'bobot_kriteria' => $request->bobot_kriteria,
        ]);

        return redirect()->route('data-kriteria.index')->with(['success' =>  'Data Berhasil diperbarui']);
    }

   
    public function destroy($id)
    {
        //
    }
}
