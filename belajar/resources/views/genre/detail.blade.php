@extends('layouts.master')

@section('tittle')
    Detail Genre {{$genre->nama}}
@endsection

@section('content')

<h1>Genre: <br> {{$genre->nama}}</h1>

{{-- <div class="row">
@forelse ($genre->listFilm as $item)

<div class="col-4">
    <div class="card mb-3">
      <img class="card-img-top" src="{{asset('poster/'.$item->poster)}}" alt="image {{$item->judul}}" style="height: 500px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">{{$item->judul}}</h5>
        <p class="card-text">{{$item->tahun}}</p>
        <p class="card-text">{{Str::limit($item->ringkasan,70)}}</p>
        <a href="/film/{{$item->id}}" class="btn btn-primary btn-block mb-2">Detail</a>
        
      </div>
    </div> --}}

<div class="row">
@forelse ($genre->listFilm as $item)

<div class="col-4">
  <div class="card mb-3">
    <img class="card-img-top" src="{{asset('poster/'.$item->poster)}}" alt="image {{$item->judul}}" style="height: 500px; object-fit: cover;">
    <div class="card-body">
      <h5 class="card-title">{{$item->judul}}</h5>
      <p class="card-text">{{$item->tahun}}</p>
      <p class="card-text">{{Str::limit($item->ringkasan,70)}}</p>
      <a href="/film/{{$item->id}}" class="btn btn-primary btn-block mb-2">Detail</a>      
    </div>
  </div>
</div>

@empty
<h4> Tidak ada Film di Genre {{$genre->nama}}</h4>
@endforelse

</div>






<a href="/genre" class="btn btn-success btn-sm my-3">Kembali</a>

@endsection