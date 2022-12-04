<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_data_alternatif;

class tb_proses_kalkulasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_alternatif', 'id_tinggi_genangan', 'id_luas_genangan'
    ];

    public function tb_data_alternatif()
    {
        return $this->belongsTo(tb_data_alternatif::class, 'id_alternatif');
    }

}
