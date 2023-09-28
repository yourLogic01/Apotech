<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksi = new Transaksi();
        $transaksi->tanggal_beli = '28/09/2023';
        $transaksi->costumer_id = '1';
        $transaksi->obat_id = '1';
        $transaksi->jumlah_beli = '5';
        $transaksi->total_harga = '900000';
        $transaksi->save();
    }
}
