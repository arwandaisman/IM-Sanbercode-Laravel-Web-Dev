@extends('layouts.master')

@section('tittle')
    Tambah Data
@endsection

@section('content')
<a href="/film" class="btn btn-success btn-sm my-3">Kembali</a>
    <form method="POST" action="/film" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="genre">Genre :</label>
            <select name="genre_id" class="form-control @error('genre_id') is-invalid @enderror" placeholder="Pilih genre">
                <option value=""> -- Pilih Genre --</option>
                @forelse($genre as $item)
                <option value="{{$item->id}}" {{ old('genre_id') == $item->id ? 'selected' : '' }}> {{$item->nama}} </option>
                @empty
                <option value=""> Tidak Ada Genre</option>
                @endforelse
            </select>
            @error('genre_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="judul">Judul :</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan judul film" value="{{ old('judul') }}">
            @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ringkasan">Ringkasan :</label>
            <textarea class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan" rows="10" placeholder="Masukkan ringkasan">{{ old('ringkasan') }}</textarea>
            @error('ringkasan')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tahun">Tahun :</label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="Masukkan tahun" value="{{ old('tahun') }}">
            @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="poster">Upload Poster :</label>
            <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster">
            @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
