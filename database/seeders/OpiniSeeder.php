<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OpiniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opinis')->insert([
            [
                'title' => 'Pentingnya Teknologi dalam Pendidikan',
                'content' => 'Kemajuan teknologi telah merubah cara kita belajar...',
                'author' => 'Dewi Kartika',
                'picture' => 'default.png', // Default image
                'timestamp' => Carbon::now(),
            ],
            [
                'title' => 'Masa Depan AI dan Etika',
                'content' => 'Bagaimana kita bisa memastikan AI digunakan untuk kebaikan?',
                'author' => 'Rizky Nugroho',
                'picture' => 'default.png',
                'timestamp' => Carbon::now(),
            ],
        ]);
    }
}
