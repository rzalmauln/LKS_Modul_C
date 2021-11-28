<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Kirim;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'level' => 'admin',
            'email' => 'admin@geekbot.com',
            'password' => bcrypt('code'),
            'alamat' => 'Jl.Admin',
            'noHp' => '08976493974'
        ]);
        User::create([
            'name' => 'pembeli',
            'level' => 'pembeli',
            'email' => 'pembeli@g.com',
            'password' => bcrypt('web'),
            'alamat' => 'Jl.Pembeli',
            'noHp' => '08976493974'
        ]);

        Kirim::create([
            'namaPaket' => 'Ambil di toko',
            'hargaPaket' => 0
        ]);
        Kirim::create([
            'namaPaket' => 'Standard',
            'hargaPaket' => 20000
        ]);
        Kirim::create([
            'namaPaket' => 'Kilat',
            'hargaPaket' => 40000
        ]);

        Kategori::create([
            'id' => 1,
            'namaKategori' => 'Component'
        ]);
        Kategori::create([
            'id' => 2,
            'namaKategori' => 'Board'
        ]);
        Kategori::create([
            'id' => 3,
            'namaKategori' => 'Tool'
        ]);
        Kategori::create([
            'id' => 4,
            'namaKategori' => 'Cable'
        ]);
        Kategori::create([
            'id' => 5,
            'namaKategori' => 'Sensor'
        ]);

        Produk::create([
            'id' => 1001,
            'idKategori' => 2,
            'namaProduk' => 'Arquino',
            'beratProduk' => 1,
            'warnaProduk' => 'blue',
            'tanggalProduksi' => '2012/3/3',
            'hargaProduk' => 120000
        ]);
        Produk::create([
            'id' => 2001,
            'idKategori' => 5,
            'namaProduk' => 'Mv35',
            'beratProduk' => 1,
            'warnaProduk' => 'blue',
            'tanggalProduksi' => '2001/5/29',
            'hargaProduk' => 35000
        ]);
        Produk::create([
            'id' => 3004,
            'idKategori' => 1,
            'namaProduk' => 'Exp8266',
            'beratProduk' => 1,
            'warnaProduk' => 'blue',
            'tanggalProduksi' => '2005/3/3',
            'hargaProduk' => 55000
        ]);
        Produk::create([
            'id' => 3201,
            'idKategori' => 2,
            'namaProduk' => 'Waspberry',
            'beratProduk' => 1,
            'warnaProduk' => 'green',
            'tanggalProduksi' => '2005/3/3',
            'hargaProduk' => 350000
        ]);
        Produk::create([
            'id' => 4004,
            'idKategori' => 1,
            'namaProduk' => 'Push Button',
            'beratProduk' => 2,
            'warnaProduk' => 'silver',
            'tanggalProduksi' => '1956/3/19',
            'hargaProduk' => 500
        ]);
        Produk::create([
            'id' => 5321,
            'idKategori' => 3,
            'namaProduk' => 'Solder',
            'beratProduk' => 2,
            'warnaProduk' => 'brown',
            'tanggalProduksi' => '2005/3/3',
            'hargaProduk' => 10000
        ]);
    }
}
