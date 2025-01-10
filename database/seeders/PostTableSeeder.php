<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $posts = [
        ['title' => 'Tips cepat kaya', 'content' => 'lorem ipsum'],
        ['title' => 'Tips cepat mati', 'content' => 'lorem ipsum'],
        ['title' => 'Tips cepat di kejar anjing', 'content' => 'lorem ipsum'],
        ['title' => 'Tips cepat pacaran', 'content' => 'lorem ipsum'],
        ['title' => 'Tips cepat pinter', 'content' => 'lorem ipsum'],
      ];

      // masukkan data ke database
    DB::table('posts')->insert($posts);
    }
}
