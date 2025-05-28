<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'admin1', 'password' => Hash::make('12345'), 'nama' => 'Rina Maulida', 'id_level' => 'ADM'],
            ['username' => 'admin2', 'password' => Hash::make('12345'), 'nama' => 'Dedi Pratama', 'id_level' => 'ADM'],
            ['username' => 'admin3', 'password' => Hash::make('12345'), 'nama' => 'Sari Lestari', 'id_level' => 'ADM'],
            ['username' => 'admin4', 'password' => Hash::make('12345'), 'nama' => 'Budi Santoso', 'id_level' => 'ADM'],
            ['username' => 'admin5', 'password' => Hash::make('12345'), 'nama' => 'Lila Ramadhani', 'id_level' => 'ADM'],
            ['username' => 'admin6', 'password' => Hash::make('12345'), 'nama' => 'Agus Saputra', 'id_level' => 'ADM'],
            ['username' => 'admin7', 'password' => Hash::make('12345'), 'nama' => 'Intan Permata', 'id_level' => 'ADM'],
            ['username' => 'admin8', 'password' => Hash::make('12345'), 'nama' => 'Yoga Kurniawan', 'id_level' => 'ADM'],
            ['username' => 'admin9', 'password' => Hash::make('12345'), 'nama' => 'Citra Solestika', 'id_level' => 'ADM'],
            ['username' => 'kps', 'password' => Hash::make('12345'), 'nama' => 'Wulan Sari', 'id_level' => 'KPS'],
            ['username' => 'kajur', 'password' => Hash::make('12345'), 'nama' => 'Andi Wijaya', 'id_level' => 'KJR'],
            ['username' => 'kjm', 'password' => Hash::make('12345'), 'nama' => 'Rizky Hidayat', 'id_level' => 'KJM'],
            ['username' => 'direktur', 'password' => Hash::make('12345'), 'nama' => 'Desi Anjani', 'id_level' => 'DIR'],
        ];

        DB::table('user')->insert($users);
    }
}
