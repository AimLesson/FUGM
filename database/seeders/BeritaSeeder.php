<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'title' => 'Teknologi AI Semakin Canggih',
                'content' => 'Perkembangan AI dalam beberapa tahun terakhir telah mencapai tahap yang mengagumkan...',
                'author' => 'John Doe',
                'picture' => 'default.png', // Default image
                'timestamp' => Carbon::now(),
            ],
            [
                'title' => 'Inovasi di Bidang Kesehatan',
                'content' => 'Para ilmuwan menemukan metode baru dalam penyembuhan berbagai penyakit...',
                'author' => 'Jane Smith',
                'picture' => 'default.png', // Default image
                'timestamp' => Carbon::now(),
            ],
            [
                'title' => 'Ekonomi Digital Berkembang Pesat',
                'content' => 'Ekonomi digital semakin berkembang dengan adopsi teknologi terbaru...',
                'author' => 'Alex Johnson',
                'picture' => 'default.png', // Default image
                'timestamp' => Carbon::now(),
            ],
        ]);
    }
}
