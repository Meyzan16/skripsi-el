<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sub_tinggi_genangan;
use App\Models\sub_luas_genangan;
use App\Models\sub_lamanya_genangan;
use App\Models\sub_kerugian_ekonomi;
use App\Models\sub_kerugian_daerah_perumahan;

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

    public function sub_lamanya_genangan()
    {
        return $this->hasMany(sub_lamanya_genangan::class);
    }

    public function sub_kerugian_ekonomi()
    {
        return $this->hasMany(sub_kerugian_ekonomi::class);
    }

    public function sub_kerugian_daerah_perumahan()
    {
        return $this->hasMany(sub_kerugian_daerah_perumahan::class);
    }
    
}
