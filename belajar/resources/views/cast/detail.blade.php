@extends('layouts.master')

@section('tittle')
    Tambah Data
@endsection

@section('content')

<h1>Nama: {{$cast->nama}}</h1>
<h4>Umur: {{$cast->umur}}</h4>
<h4>Bio:</h4>
<p>{{$cast->bio}}</p>
<a href="/cast" class="btn btn-success btn-sm my-3">Kembali</a>

@endsection