<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_proses_kalkulasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_alternatif', 'id_tinggi_genangan', 'id_luas_genangan'
    ];

}
