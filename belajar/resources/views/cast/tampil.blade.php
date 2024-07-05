@extends('layouts.master')

@section('tittle')
    Data Cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-primary btn-sm my-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key=> $value)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$value->nama}}</td>
            <td>{{$value->umur}}</td>
            <td>
                
                <form action="/cast/{{$value->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$value->id}}" class="btn btn-info btn-sm my-3">Detail</a>
                    <a href="/cast/{{$value->id}}/edit" class="btn btn-warning btn-sm my-3">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>Data Cast Kosong</td>
        </tr>
    @endforelse
    
  </tbody>
</table>

@endsection