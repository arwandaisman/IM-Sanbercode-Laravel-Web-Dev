@extends('layouts.master')

@section('tittle')
    Update Data
@endsection

@section('content')
<a href="/cast" class="btn btn-success btn-sm my-3">Kembali</a>
    <form method="POST" action="/cast/{{$cast->id}}">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" @error('nama') is-invalid @enderror name="nama" value="{{$cast->nama}}">
      </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
      <div class="form-group">
        <label for="umur">Umur:</label>
        <input type="number" class="form-control" @error('umur') is-invalid @enderror name="umur" value="{{$cast->umur}}">
      </div>
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <div class="form-group">
        <label for="bio">Bio:</label>
        <textarea class="form-control" @error('bio') is-invalid @enderror name="bio" rows="10" >{{$cast->bio}}</textarea>
      </div>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection