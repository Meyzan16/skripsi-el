<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_ganguan_sosial extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kriteria','nama_sub_kriteria', 'nilai'
    ];
}