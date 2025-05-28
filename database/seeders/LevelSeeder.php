<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level')->insert([
            ['id_level' => 'ADM', 'nama_level' => 'Administrator'],
            ['id_level' => 'KPS', 'nama_level' => 'Kepala Program Studi'],
            ['id_level' => 'KJR', 'nama_level' => 'Ketua Jurusan'],
            ['id_level' => 'KJM', 'nama_level' => 'Koordinator Jaminan Mutu'],
            ['id_level' => 'DIR', 'nama_level' => 'Direktur'],
        ]);
    }
}
