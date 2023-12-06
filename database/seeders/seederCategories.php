<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class seederCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nama_kategori" => "Minuman"],
            ["nama_kategori" => "Makanan"]
        ];

        foreach ($data as $d) {
            Categories::insert($d);
        }
    }
}
