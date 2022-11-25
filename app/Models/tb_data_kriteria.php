<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sub_tinggi_genangan;
use App\Models\sub_luas_genangan;

class tb_data_kriteria extends Model
{
    use HasFactory;

    public function sub_tinggi_genangan()
    {
        return $this->hasMany(sub_tinggi_genangan::class);
    }

    public function sub_luas_genangan()
    {
        return $this->hasMany(sub_luas_genangan::class);
    }
    
}
