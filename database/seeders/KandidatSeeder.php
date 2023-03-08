<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kandidat')->insert([
            'no_kandidat' => '1',
            'nama' => 'Gufron',
            'visi' => 'Mencerdaskan Kehidupan Bangsa',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('kandidat')->insert([
            'no_kandidat' => '2',
            'nama' => 'Nurjalil',
            'visi' => 'Melaksanakan Ketertiban Dunia',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        }
}
