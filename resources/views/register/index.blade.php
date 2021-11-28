@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4">
      <main class="form-register">
        <h1 class="h3 mb-3 fw-normal text-center">Silakan Register</h1>
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Nama</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
            <label for="alamat">Alamat</label>
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="number" name="noHp" class="form-control @error('noHp') is-invalid @enderror" id="noHp" placeholder="+62" required value="{{ old('noHp') }}">
            <label for="noHp">No. Telepon</label>
            @error('noHp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login sekarang</a></small>
      </main>
    </div>
  </div>
@endsection