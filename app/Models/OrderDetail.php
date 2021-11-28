<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\Order;

class OrderDetail extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsTo(Order::class, 'idOrder', 'id');
    }
    public function produk(){
        return $this->belongsTo(Produk::class, 'idProduk', 'id');
    }
}
