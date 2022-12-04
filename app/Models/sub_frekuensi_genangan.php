<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_data_kriteria;
use App\Models\tb_proses_kalkulasi;

class sub_frekuensi_genangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kriteria','nama_sub_kriteria', 'nilai'
    ];

    public function tb_data_kriteria()
    {
        return $this->belongsTo(tb_data_kriteria::class, 'kode_kriteria', 'kode_kriteria');
    }

    public function tb_proses_kalkulasi()
    {
        return $this->hasMany('tb_proses_kalkulasi');
    }
}
