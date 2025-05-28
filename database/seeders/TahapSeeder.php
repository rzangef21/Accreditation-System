<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tahap')->insert([
            ['id_tahap' => 'T-01', 'nama_tahap' => 'Penetapan'],
            ['id_tahap' => 'T-02', 'nama_tahap' => 'Pelaksanaan'],
            ['id_tahap' => 'T-03', 'nama_tahap' => 'Evaluasi'],
            ['id_tahap' => 'T-04', 'nama_tahap' => 'Pengendalian'],
            ['id_tahap' => 'T-05', 'nama_tahap' => 'Peningkatan'],
        ]);
    }
}
