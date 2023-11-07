<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Mahasiswa::truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            'name' => 'Nama Pengguna',
            'NIM' => 'H071201076',
            'gender' => 'L',
            
        ];
        
        Mahasiswa::create($data);
        // $user = Mahasiswa::find(1); // Ganti $userId dengan ID pengguna yang ingin diubah

// if ($user) {
//     $user->name = 'Nama Pengguna Baru';
//     $user->NIM = 'H071201076';
//     $user->save();
// if ($user) {
//     $user->delete();
// }
}
    }
