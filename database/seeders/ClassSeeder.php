<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        // $data = [
        //     'name' => '1A',
           
        // ];
        // foreach ($data as $value) {
            ClassRoom::insert([
                'name'=> '1A',
                'created_at'=> Carbon::now(),
            ]); 
        // }
       
    }
}
