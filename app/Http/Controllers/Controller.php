<?php

namespace App\Http\Controllers;

use App\Models\Kirim;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Darryldecode\Cart\Cart;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $data = Produk::all();
        $paket = Kirim::all();
        
        return view('index', [
            'title' => 'Home',
            'active' => 'home',
            'data' => $data,
            'paket' => $paket
        ]);
    }

    public function hitungJumlah(Request $request){
        $produk = Produk::find($request->idProduk);
        // dd($produk);
        \Cart::add([
            'id' => $produk->id,
            'name' => $produk->namaProduk,
            'price' => $produk->hargaProduk,
            'quantity' => $request->input('jumlahHarga'),
        ]);

        return redirect()->back()->with('messageCart', 'Produk Berhasil ditambahkan');
    }

    public function show() {
        $items = \Cart::getContent();
        
        return view('index', compact('items'));
    }
}
