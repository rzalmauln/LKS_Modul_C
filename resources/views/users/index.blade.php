@extends('layouts.master')

@section('content')
<div class="container">
    @auth   
    <div class="row">
        <div class="col-md-12">
            <h2>Shopping History {{ auth()->user()->name }}</h2>
            <hr>
            <div class="card text-center">
                <div class="card-header">
                  2012-3-3 | Paket Standard : 20000
                </div>
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1001</th>
                          <td>Arquino</td>
                          <td>1</td>
                          <td>120000</td>
                        </tr>
                        <tr>
                          <th scope="row">2001</th>
                          <td>Mv35</td>
                          <td>1</td>
                          <td>35000</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
                <div class="card-footer text-muted">
                  Total : 
                </div>
              </div>
        </div>
    </div>
    @endauth
</div>
@endsection