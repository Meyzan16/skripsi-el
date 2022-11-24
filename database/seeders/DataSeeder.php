<?php

namespace Database\Seeders;

use App\Models\sub_luas_genangan;
use App\Models\sub_tinggi_genangan;
use App\Models\tb_data_alternatif;
use App\Models\tb_data_kriteria;
use App\Models\tb_proses_kalkulasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tb_data_kriteria::create([
            'kode_kriteria' => 'C1',
            'nama_kriteria' => 'tinggi genangan',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C2',
            'nama_kriteria' => 'luas genangan',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C3',
            'nama_kriteria' => 'lamanya genangan',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C4',
            'nama_kriteria' => 'frekuensi genangan',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C5',
            'nama_kriteria' => 'kerugian ekonomi',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C6',
            'nama_kriteria' => 'gangguan sosial dan fasilitas pemerintah',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C7',
            'nama_kriteria' => 'kerugian dan gangguan transportasi',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C8',
            'nama_kriteria' => ' kerugian pada daerah perumahan',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);

        tb_data_kriteria::create([
            'kode_kriteria' => 'C9',
            'nama_kriteria' => 'kerugian hak milik pribadi',
            'bobot_kriteria' => '3',
            'jenis_kriteria' => 'Benefit',
        ]);


        tb_data_alternatif::create([
            'nama_daerah' => 'unib belakang',
            'kecamatan' => 'muara bangka hulu',
        ]);




        sub_tinggi_genangan::create([
            'kode_kriteria' => 'C1',
            'nama_sub_kriteria' => 'tinggi_genangan_1',
            'nilai' => '1',
        ]);
        sub_tinggi_genangan::create([
            'kode_kriteria' => 'C1',
            'nama_sub_kriteria' => 'tinggi_genangan_2',
            'nilai' => '2',
        ]);


        sub_luas_genangan::create([
            'kode_kriteria' => 'C2',
            'nama_sub_kriteria' => 'luas_genangan_1',
            'nilai' => '1',
        ]);
        sub_luas_genangan::create([
            'kode_kriteria' => 'C2',
            'nama_sub_kriteria' => 'luas_genangan_2',
            'nilai' => '2',
        ]);


        tb_proses_kalkulasi::create([
            'id_altenatif' => '1',
            'id_tinggi_genangan' => '1',
            'id_luas_genangan' => '1',
        ]);
        


    }
}
