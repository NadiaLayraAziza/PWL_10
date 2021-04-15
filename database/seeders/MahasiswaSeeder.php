<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Mahasiswa::insert([
            [
                'Nim' => '1941720061',
                'Nama' => 'Nadia Layra Aziza',
                'Kelas' => 'TI-2C',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081259347608'
            ],
            [
                'Nim' => '2041720007',
                'Nama' => 'Najma Faradisa',
                'Kelas' => 'AK-1E',
                'Jurusan' => 'Akuntansi',
                'No_Handphone' => '088000451175'
            ],
            [
                'Nim' => '1731720125',
                'Nama' => 'Ahmad Uwais Al-Qorni',
                'Kelas' => 'TS-4B',
                'Jurusan' => 'Tknik Sipil',
                'No_Handphone' => '081234489551'
            ]
        ]);
    }
}
