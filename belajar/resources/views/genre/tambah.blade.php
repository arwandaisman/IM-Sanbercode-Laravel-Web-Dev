@extends('layouts.master')

@section('tittle')
    Tambah Data
@endsection

@section('content')
<a href="/genre" class="btn btn-success btn-sm my-3">Kembali</a>
    <form method="POST" action="/genre">
        @csrf
      <div class="form-group">
        <label for="nama">Genre:</label>
        <input type="text" class="form-control" @error('nama') is-invalid @enderror name="nama" placeholder="Masukkan nama genre">
      </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection