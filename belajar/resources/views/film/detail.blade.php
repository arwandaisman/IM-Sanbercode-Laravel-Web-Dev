@extends('layouts.master')

@section('title')
    Detail Film
@endsection

@section('content')
    {{-- <img class="card-img-top" src="{{asset('poster/'.$film->poster)}}" alt="image {{$film->judul}}" style="height: 500px; object-fit: cover;"> --}}
    <div>
      <h2><b>Judul : {{$film->judul}}</b></h2>
      <p><b>Tahun :</b> {{$film->tahun}}</p>
      <img src="{{asset('poster/'.$film->poster)}}" alt="image {{$film->judul}}" width="20%"><br>
      <p class="card-text"><b>Ringkasan :</b><br>{{$film->ringkasan}}</p>
    </div>
    
    <a href="/film" class="btn btn-success btn-sm my-3">Kembali</a>
    <a href="/film/{{$film->id}}/edit" class="btn btn-warning btn-sm my-3 ml-2">Edit</a>
    
    <form action="/film/{{$film->id}}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger btn-sm my-3 ml-2" value="Delete">
    </form>
@endsection
