<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\tb_data_kriteria;

class sub_tinggi_genangan extends Model
{
    use HasFactory;

    public function tb_data_kriteria()
    {
        return $this->belongsTo(tb_data_kriteria::class, 'kode_kriteria', 'kode_kriteria');
    }
}
