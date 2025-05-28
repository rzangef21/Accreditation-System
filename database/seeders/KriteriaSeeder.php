<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriteria')->insert([
            ['id_kriteria' => 'K-01', 'nama_kriteria' => 'Kriteria 1'],
            ['id_kriteria' => 'K-02', 'nama_kriteria' => 'Kriteria 2'],
            ['id_kriteria' => 'K-03', 'nama_kriteria' => 'Kriteria 3'],
            ['id_kriteria' => 'K-04', 'nama_kriteria' => 'Kriteria 4'],
            ['id_kriteria' => 'K-05', 'nama_kriteria' => 'Kriteria 5'],
            ['id_kriteria' => 'K-06', 'nama_kriteria' => 'Kriteria 6'],
            ['id_kriteria' => 'K-07', 'nama_kriteria' => 'Kriteria 7'],
            ['id_kriteria' => 'K-08', 'nama_kriteria' => 'Kriteria 8'],
            ['id_kriteria' => 'K-09', 'nama_kriteria' => 'Kriteria 9'],
        ]);
    }
}
