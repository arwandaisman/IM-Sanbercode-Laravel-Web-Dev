@extends('layouts.master')

@section('tittle')
    Update Data
@endsection

@section('content')
<a href="/genre" class="btn btn-success btn-sm my-3">Kembali</a>
    <form method="POST" action="/genre/{{$genre->id}}">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" @error('nama') is-invalid @enderror name="nama" value="{{$genre->nama}}">
      </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection