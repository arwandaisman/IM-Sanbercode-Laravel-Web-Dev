@extends('layouts.master')

@section('tittle')
    Detail Film
@endsection

@section('content')
    {{-- <img class="card-img-top" src="{{asset('poster/'.$value->poster)}}" alt="image {{$value->judul}}" style="height: 500px; object-fit: cover;"> --}}
    <div>
      <h2><b>Judul : {{$film->judul}}</h2>
      <p>Tahun : </b>{{$film->tahun}}</p>
      <img src="{{asset('poster/'.$film->poster)}}" alt="image {{$film->judul}}" width="20%"><br>
      <p class="card-text"><br><b>Ringkasan : </b><br>{{$film->ringkasan}}</p>
    </div>
<a href="/film" class="btn btn-success btn-sm my-3">Kembali</a> <br>
<a href="/film/{{$film->id}}/edit" class="btn btn-warning btn-sm my-3">Edit</a>


<form action="/film/{{$film->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger btn-sm my-3" value="Delete">
</form>


@endsection