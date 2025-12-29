<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       DB::table('umkm')->insert([
            'nama_umkm' => 'Warung Makan Barokah',
            'pemilik' => 'Budi Santoso',
            'kategori' => 'Kuliner',
            'deskripsi' => 'Masakan rumahan harga mahasiswa',
            'alamat' => 'Jl. Glagahsari No.12',
            'kontak' => '08123456789',
            'jam_operasional' => '08.00 - 21.00',
            'status' => 'AKTIF'
        ]);
    }
}
