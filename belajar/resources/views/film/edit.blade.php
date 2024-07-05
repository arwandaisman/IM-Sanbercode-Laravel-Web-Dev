@extends('layouts.master')

@section('tittle')
    Update Data
@endsection

@section('content')
<a href="/film" class="btn btn-success btn-sm my-3">Kembali</a>
    <form method="POST" action="/film/{{$film->id}}" enctype="multipart/form-data">
      @method("PUT")
      @csrf
      <div class="form-group">
        <label>Genre :</label>
        <select name = "genre_id" class="form-control" id="">
          <option value = ""> -- Pilih Genre --</option>

          @forelse($genre as $item)
            @if ($item->id === $film->genre_id)
              <option value = {{$item->id}} selected>{{$item->nama}} </option>
            @else 
              <option value = "{{$item->id}}"> {{$item->nama}} </option>
            @endif

          @empty
            <option value = ""> Tidak Ada Genre</option>
          @endforelse
        </select>
      </div>
        


      <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" @error('judul') is-invalid @enderror name="judul" value="{{$film->judul}}">
      </div>
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <div class="form-group">
        <label for="ringkasan">Ringkasan :</label>
        <textarea class="form-control" @error('ringkasan') is-invalid @enderror name="ringkasan" rows="10">{{$film->ringkasan}}</textarea>
      </div>
        @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <div class="form-group">
        <label for="tahun">Tahun :</label>
        <input type="number" class="form-control" @error('tahun') is-invalid @enderror name="tahun" value="{{$film->tahun}}">
      </div>
        @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      <div class="form-group">
        <label for="poster">Upload Poster :</label>
        <input type="file" class="form-control" @error('poster') is-invalid @enderror name="poster">
      </div>
        @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection