@extends('layouts.master')

@section('tittle')
    Detail Genre
@endsection

@section('content')

<h1>Genre: <br> {{$genre->nama}}</h1>
<a href="/genre" class="btn btn-success btn-sm my-3">Kembali</a>

@endsection