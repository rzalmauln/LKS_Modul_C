<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kirim;
use App\Models\User;


class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'orderDate',
        'idCustomer',
        'idKirim'
    ];

    public function kirim(){
        return $this->belongsTo(Kirim::class,'idKirim','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'idUsers','id');
    }
}
