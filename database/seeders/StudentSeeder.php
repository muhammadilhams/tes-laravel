<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'name' => 'Nama Pengguna',
            'gender' => 'L',
            'NIM' => 'H071201075',
                'class_id'=>1,
                'created_at'=> Carbon::now()
        ];
        
        Student::create($data);
        
        $user = Student::find(1); // Ganti $userId dengan ID pengguna yang ingin diubah

if ($user) {
    $user->name = 'Nama Pengguna Baru';
    $user->gender = 'l';
    $user->save();
}
// $user = Student::find(1); // Ganti $userId dengan ID pengguna yang ingin dihapus

// if ($user) {
//     $user->delete();
// }
        
    }
}
