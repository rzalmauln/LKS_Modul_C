<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idKategori',
        'namaProduk', 
        'beratProduk', 
        'warnaProduk', 
        'tanggalProduksi', 
        'hargaProduk'
    ];

    protected $table = 'produks';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idKategori', 'id');
    }
}
