<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_proses_kalkulasi;

class tb_data_alternatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_daerah','kecamatan'
    ];

    public function tb_proses_kalkulasi()
    {
        return $this->hasOne('tb_proses_kalkulasi');
    }
}
