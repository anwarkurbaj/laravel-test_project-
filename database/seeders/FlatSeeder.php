<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FlatSeeder extends Seeder
{
    /**
    * Run the database seeds .
    */
    public function run(): void
    {
        for($i = 0;$i<20;$i++)
        {
          DB::table('flats')->insert([
    'name'    => Str::random(10),
    'address' => Str::random(20), // أو أي قيمة ثانية
]);


        }
    }
}
