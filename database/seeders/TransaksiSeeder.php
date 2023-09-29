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
        $transaksi->tanggal_beli = '2023/09/09';
        $transaksi->customer_id = '1';
        $transaksi->obat_id = '1';
        $transaksi->jumlah_beli = '5';
        $transaksi->total_harga = '900000';
        $transaksi->save();
    }
}
