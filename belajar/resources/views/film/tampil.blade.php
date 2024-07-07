@extends('layouts.master')

@section('tittle')
    Data Film
@endsection

@section('content')

@auth
<a href="/film/create" class="btn btn-primary btn-sm my-3">Tambah</a>
@endauth


<div class="row">
@forelse ($film as $key=> $value)

<div class="col-4">
  <div class="card mb-3">
    <img class="card-img-top" src="{{asset('poster/'.$value->poster)}}" alt="image {{$value->judul}}" style="height: 500px; object-fit: cover;">
    <div class="card-body">
      <h5 class="card-title">{{$value->judul}}</h5><br>
      <span class="badge badge-info">{{$value->genre->nama}}</span>
      <p class="card-text">{{$value->tahun}}</p>
      <p class="card-text">{{Str::limit($value->ringkasan,70)}}</p>
      <a href="/film/{{$value->id}}" class="btn btn-primary btn-block mb-2">Detail</a>

      @auth
      <a href="/film/{{$value->id}}/edit" class="btn btn-warning btn-block mb-2">Edit</a>
      <form action="/film/{{$value->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger btn-block" value="Delete">
      </form>
      @endauth

      
    </div>
  </div>
</div>

@empty
<div class="col-12">
    <p>Data Film Kosong</p>
</div>
@endforelse
</div>
@endsection
