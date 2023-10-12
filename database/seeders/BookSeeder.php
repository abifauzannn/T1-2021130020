<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
                $isbn = $faker->unique()->isbn13;
                $judul = $faker->sentence;
                $halaman = $faker->numberBetween(100, 500);
                $kategori = 'uncategoriz';
                $penerbit= $faker->company;
                $created_at = now();
                $updated_at = now();

                DB::table('books')->insert([
                    'isbn' => $isbn,
                    'judul' => $judul,
                    'halaman' => $halaman,
                    'kategori' => $kategori,
                    'penerbit' => $penerbit,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ]);
        }
    }
}
