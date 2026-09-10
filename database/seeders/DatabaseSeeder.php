<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $fiksi = Category::create([
            "name" => "Fiksi"
        ]);
        $pelajaran = Category::create([
            "name" => "Pelajaran"
        ]);
        $teknologi = Category::create([
            "name" => "Teknologi"
        ]);

        Book::create([
            "category_id" => $fiksi->id,
            "judul" => "Laskar Pelangi",
            "penulis" => "Andrea Hirata",
            "penerbit" => "Gramedia",
            "tahun" => 2011,
            "stok" => 12
        ]);

        Book::create([
            "category_id" => $fiksi->id,
            "judul" => "Bumi",
            "penulis" => "Tere Liye",
            "penerbit" => "IQIS",
            "tahun" => 2011,
            "stok" => 12
        ]);

        Book::create([
            "category_id" => $pelajaran->id,
            "judul" => "Pemograman Web dengan Laravel",
            "penulis" => "Sandhika Galih",
            "penerbit" => "Media Pusaka",
            "tahun" => 2015,
            "stok" => 8
        ]);

        Book::create([
            "category_id" => $teknologi->id,
            "judul" => "Claude Opus 8.5",
            "penulis" => "Afgan Rajie",
            "penerbit" => "Media Pusaka",
            "tahun" => 2015,
            "stok" => 8
        ]);
    }
}
