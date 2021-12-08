@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <h1>Geek Bot Shop</h1>
                    </div>
                    <div class="col">
                        <p>{{ \Cart::getTotalQuantity() }} Produk sudah ditambahkan</p>
                        @if (\Cart::getTotalQuantity())
                            <a href="{{ route('cart.clear') }}" class="no-underline text-black">Bersihkan Keranjang</a>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="h-50 overflow-scroll">
                    @foreach ($data as $item)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{ $item->id }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>{{ $item->namaProduk }}</h4>
                                        <small>Berat : {{ $item->beratProduk }} | Warna : {{ $item->warnaProduk }} |
                                            {{ $item->tanggalProduksi }}</small>
                                    </div>
                                    <div class="col-md-4">
                                        {{ $item->kategori->namaKategori }} | Rp.
                                        {{ number_format($item->hargaProduk) }}
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <form action="{{ route('hitungJumlah') }}" class="d-flex"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="idProduk" value="{{ $item->id }}">
                                                <input type="number" class="form-control" name="jumlahHarga" value="0"
                                                    min="0">
                                                <button class="btn btn-outline-secondary" type="submit">Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
                <h1>Paket Pengiriman</h1>
                <form action="{{ route('order') }}" class="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 d-flex">
                            <select class="col-12 form-select" name="paket" id="paket" aria-label="Default select example">
                                <option selected>Pilih Paket</option>
                                @foreach ($paket as $item)
                                    <option value="{{ $item->id }}">{{ $item->namaPaket }}:
                                        {{ number_format($item->hargaPaket) }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="button" class="col ms-2 btn btn-secondary btn-sm" onclick="getPaket()"
                                value="Check">
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <h1 id="select-paket">0</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-end">
                        <div class="col-md-auto">
                            <h1>Total :</h1>
                        </div>
                        <div class="col-md-auto">
                            <h1>Rp. {{ number_format(\Cart::getTotal()) }}</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-auto">
                            <input type="hidden" name="totalOrder" value="{{ \Cart::getContent() }}">
                            <input type="hidden" name="totalHarga" value="{{ \Cart::getTotal() }}">
                            <button type="submit" class="btn btn-lg btn-success">Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function rubah(angka) {
            var reverse = angka.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return ribuan;
        }

        function getPaket() {
            let paket = document.getElementById('paket');
            document.getElementById('select-paket').innerHTML = paket.options[paket.selectedIndex].innerHTML;
        }

        function getIdPaket() {
            let paket = document.getElementById('paket');
            document.getElementById('select-paket').innerHTML = paket.options[paket.selectedIndex].value;
        }
    </script>
@endpush
