@extends('layouts.master')

@section('tittle')
{{$film->judul}}
@endsection

@section('content')
    <div>
      <p><b>Tahun :</b> {{$film->tahun}}</p>
      <img src="{{asset('poster/'.$film->poster)}}" alt="image {{$film->judul}}" width="20%"><br><br>
      <p class="card-text"><b>Ringkasan :</b><br>{{$film->ringkasan}}</p>
    </div>
    
    <br>
    <hr>
    <h4>List Komentar</h4>
    @forelse ($film->Comments as $item)
    <div class="card">
        <div class="card-header">
            {{$item->user->name}}
        </div>
        <div class="card-body">
            <p class="card-text">{{$item->content}}</p>
        </div>
    </div>
    @empty
        Tidak ada komentar
    @endforelse

    @auth
    <br><hr>
    <h5>Tambah Komentar</h5>
        <form action="/comments/{{$film->id}}" method="POST" class="mb-5">
            @csrf
            <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Isi Komentar.."></textarea><br>
            <input type="submit" value="Beri Komentar" class=" btn btn-sm btn-block btn-primary">
        </form>
    @endauth
    

    <a href="/film" class="btn btn-success btn-sm my-3">Kembali</a>

    @auth
        <a href="/film/{{$film->id}}/edit" class="btn btn-warning btn-sm my-3 ml-2">Edit</a>
        
        <form action="/film/{{$film->id}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger btn-sm my-3 ml-2" value="Delete">
        </form>
    @endauth
@endsection
