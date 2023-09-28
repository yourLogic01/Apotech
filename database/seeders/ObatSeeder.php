<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obat = new Obat();
        $obat->nama = 'paracetamol';
        $obat->category_id = '1';
        $obat->harga = '18000';
        $obat->stok = '200';
        $obat->save();
    }
}
