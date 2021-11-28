@extends('layouts.master')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1>Produk</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-lg"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <main class="form-register">
                                    <form action="{{ route('tambahProduk') }}" method="post">
                                    @csrf
                                    <div class="form-floating">
                                        <input type="number" name="id" style="border-color:#ced4da; box-shadow:none;" class="form-control rounded-top @error('id') is-invalid @enderror" id="id" placeholder="ID Produk" value="{{ old('id') }}">
                                        <label for="id">ID Produk</label>
                                        @error('id')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="namaProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('namaProduk') is-invalid @enderror" id="namaProduk" placeholder="Nama Produk" value="{{ old('namaProduk') }}">
                                        <label for="namaProduk">Nama Produk</label>
                                        @error('namaProduk')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" name="beratProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control rounded-bottom @error('beratProduk') is-invalid @enderror" id="beratProduk" placeholder="Berat Produk" value="{{ old('beratProduk') }}">
                                        <label for="beratProduk">Berat Produk</label>
                                        @error('beratProduk')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="warnaProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('warnaProduk') is-invalid @enderror" id="warnaProduk" placeholder="Warna Produk" value="{{ old('warnaProduk') }}">
                                        <label for="warnaProduk">Warna Produk</label>
                                        @error('warnaProduk')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="date" name="tanggalProduksi" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('tanggalProduksi') is-invalid @enderror" id="tanggalProduksi" placeholder="Tanggal Produksi" value="{{ old('tanggalProduk') }}">
                                        <label for="tanggalProduksi">Tanggal Produksi</label>
                                        @error('tanggalProduksi')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" name="hargaProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('hargaProduk') is-invalid @enderror" id="hargaProduk" placeholder="Harga Produk" value="{{ old('hargaProduk') }}">
                                        <label for="hargaProduk">Harga Produk</label>
                                        @error('hargaProduk')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" name="idKategori" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('idKategori') is-invalid @enderror" id="idKategori" placeholder="ID Kategori" value="{{ old('idKategori') }}">
                                        <label for="idKategori">ID Kategori</label>
                                        @error('idKategori')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Tambah</button>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>            
                <hr>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Warna</th>
                            <th>Tanggal Produksi</th>
                            <th>Harga Produk</th>
                            <th>Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)    
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->namaProduk }}</td>
                            <td>{{ $item->beratProduk }}</td>
                            <td>{{ $item->warnaProduk }}</td>
                            <td>{{ $item->tanggalProduksi }}</td>
                            <td>{{ number_format($item->hargaProduk) }}</td>
                            <td>{{ $item->idKategori }}</td>
                            <td class="d-flex">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <main class="form-register">
                                                    <form action="{{ route('updateProduk') }}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                    <div class="form-floating">
                                                        <input type="number" name="id" style="border-color:#ced4da; box-shadow:none;" class="form-control rounded-top @error('id') is-invalid @enderror" id="id" placeholder="ID Produk" value="{{ $item->id }}">
                                                        <label for="id">ID Produk</label>
                                                        @error('id')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="text" name="namaProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('namaProduk') is-invalid @enderror" id="namaProduk" placeholder="Nama Produk" value="{{ $item->namaProduk }}">
                                                        <label for="namaProduk">Nama Produk</label>
                                                        @error('namaProduk')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="number" name="beratProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control rounded-bottom @error('beratProduk') is-invalid @enderror" id="beratProduk" placeholder="Berat Produk" value="{{ $item->beratProduk }}">
                                                        <label for="beratProduk">Berat Produk</label>
                                                        @error('beratProduk')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="text" name="warnaProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('warnaProduk') is-invalid @enderror" id="warnaProduk" placeholder="Warna Produk" value="{{ $item->warnaProduk }}">
                                                        <label for="warnaProduk">Warna Produk</label>
                                                        @error('warnaProduk')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="date" name="tanggalProduksi" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('tanggalProduksi') is-invalid @enderror" id="tanggalProduksi" placeholder="Tanggal Produksi" value="{{ $item->tanggalProduksi }}">
                                                        <label for="tanggalProduksi">Tanggal Produksi</label>
                                                        @error('tanggalProduksi')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="number" name="hargaProduk" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('hargaProduk') is-invalid @enderror" id="hargaProduk" placeholder="Harga Produk" value="{{ $item->hargaProduk }}">
                                                        <label for="hargaProduk">Harga Produk</label>
                                                        @error('hargaProduk')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="number" name="idKategori" style="border-color:#ced4da; box-shadow:none;" class="form-control @error('idKategori') is-invalid @enderror" id="idKategori" placeholder="ID Kategori" value="{{ $item->idKategori }}">
                                                        <label for="idKategori">ID Kategori</label>
                                                        @error('idKategori')
                                                        <div class="invalid-feedback">
                                                        {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <input type="hidden" name="ID" value="{{ $item->id }}">
                                                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Simpan</button>
                                                    </form>
                                                </main>
                                            </div>
                                        </div>
                                        </div>
                                    </div>    
                                </form>
                                <form action="{{ route('hapusProduk') }}" method="post" class="col">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div>
                <h1>Kategori</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kategori">
                    <i class="bi bi-plus-lg"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <main class="form-register">
                                    <form action="{{ route('tambahKategori') }}" method="post">
                                    @csrf
                                    <div class="form-floating">
                                        <input type="text" name="namaKategori" style="border-color:#ced4da; box-shadow:none;" class="form-control rounded-top" id="namaKategori" placeholder="ID Produk" value="{{ old('namaKategori') }}">
                                        <label for="namaKategori">Nama Kategori</label>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Tambah</button>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $item)    
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->namaKategori }}</td>
                            <td>
                                <form action="{{ route('hapusKategori') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection