<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Number;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => Str::random(10),
            'pages' => 162,
            'quantity' => 1,
        ]);
        DB::table('books')->insert([
            'title' => "Old Booklette",
            'pages' => 5,
            'quantity' => 2,
        ]);
    }
}
