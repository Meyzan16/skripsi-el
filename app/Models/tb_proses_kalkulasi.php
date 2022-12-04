<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_data_alternatif;
use App\Models\sub_tinggi_genangan;

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

    public function sub_tinggi_genangan()
    {
        return $this->belongsTo(sub_tinggi_genangan::class, 'id_tinggi_genangan', 'id_tinggi_genangan');
    }

    public function sub_luas_genangan()
    {
        return $this->belongsTo(sub_luas_genangan::class, 'id_luas_genangan', 'id_luas_genangan');
    }
    public function sub_lamanya_genangan()
    {
        return $this->belongsTo(sub_lamanya_genangan::class, 'id_lamanya_genangan', 'id_lamanya_genangan');
    }

    public function sub_frekuensi_genangan()
    {
        return $this->belongsTo(sub_frekuensi_genangan::class, 'id_frekuensi_genangan', 'id_frekuensi_genangan');
    }

    public function sub_kerugian_ekonomi()
    {
        return $this->belongsTo(sub_kerugian_ekonomi::class, 'id_kerugian_ekonomi', 'id_kerugian_ekonomi');
    }


    public function sub_gangguan_sosial()
    {
        return $this->belongsTo(sub_gangguan_sosial::class, 'id_gangguan_sosial', 'id_gangguan_sosial');
    }

    public function sub_gangguan_transportasi()
    {
        return $this->belongsTo(sub_gangguan_transportasi::class, 'id_gangguan_transportasi', 'id_gangguan_transportasi');
    }

    public function sub_kerugian_daerah_perumahan()
    {
        return $this->belongsTo(sub_kerugian_daerah_perumahan::class, 'id_kerugian_daerah_perumahan', 'id_kerugian_daerah_perumahan');
    }

    public function sub_hak_milik_pribadi()
    {
        return $this->belongsTo(sub_hak_milik_pribadi::class, 'id_hak_milik_pribadi', 'id_hak_milik_pribadi');
    }

}
