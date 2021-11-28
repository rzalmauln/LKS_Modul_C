<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index',[
            'title' => 'Admin',
            'active' => 'admin',
            'produk' => Produk::all(),
            'kategori' => Kategori::all()
        ]);
    }

    public function createProduk(Request $request){
        $request->validate([
            'id' => 'required|unique:produks|integer|digits:4',
            'idKategori' => 'required|integer|max:5',
        ]);
        
        Produk::create($request->all());

        return redirect()->back();
    }   

    public function destroyProduk(){
        Produk::where('id', request('id'))->delete();
        return redirect()->back();
    }  

    public function updateProduk(Request $request){
        $request->validate([
            'id' => 'required|integer|digits:4',
            'idKategori' => 'required|integer|max:}',
        ]);

        Produk::where('id', $request->ID)
                ->update(['id' => $request->id,
                            'namaProduk' => $request->namaProduk,
                            'beratProduk' => $request->beratProduk,
                            'warnaProduk' => $request->warnaProduk,
                            'tanggalProduksi' => $request->tanggalProduksi,
                            'hargaProduk' => $request->hargaProduk,
                            'idKategori' => $request->idKategori
            ]);
        return redirect()->back();
    }

    public function createKategori(Request $request){
        Kategori::create($request->all());

        return redirect()->back();
    }   

    public function destroykategori(){
        Kategori::where('id', request('id'))->delete();
        return redirect()->back();
    }  
}
