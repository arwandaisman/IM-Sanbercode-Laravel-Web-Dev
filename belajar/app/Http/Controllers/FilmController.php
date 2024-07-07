<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;

class FilmController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
 
        return view('film.tampil', ['film' => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        return view('film.tambah',['genre'=>$genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|min:2|max:255',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes:png,jpg,jpeg|max:11000',
            'genre_id' => 'required',
        ]);
        
            $imageName = time().'.'.$request->poster->extension();
            $request->poster->move(public_path('poster'),$imageName);

            Film::create([
            'judul' => $request->input('judul'),
            'ringkasan' => $request->input('ringkasan'),
            'tahun' => $request->input('tahun'),
            'poster' => $imageName,
            'genre_id' => $request->input('genre_id'),
            ]);

            return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
 
        return view('film.detail', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        // $genre = Genre::find($id);
        $genre = Genre::all();
        return view('film.edit', ['film' => $film,'genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|min:2|max:255',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'mimes:png,jpg,jpeg|max:11000',
            'genre_id' => 'required',
        ]);

        $film = Film::find($id);

        if ($request->hasFile('poster')) {
            // Delete the old poster
            if (file_exists(public_path('poster/' . $film->poster))) {
                unlink(public_path('poster/' . $film->poster));
            }

            $imageName = time().'.'.$request->poster->extension();
            $request->poster->move(public_path('poster'), $imageName);
            $film->poster = $imageName;
        }

        $film->update([
            'judul' => $request->input('judul'),
            'ringkasan' => $request->input('ringkasan'),
            'tahun' => $request->input('tahun'),
            'genre_id' => $request->input('genre_id'),
        ]);

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);
        if ($film) {
            // Hapus file poster dari direktori publik
            $posterPath = public_path('poster') . '/' . $film->poster;
            if (file_exists($posterPath)) {
                unlink($posterPath);
            }

            $film->delete();
        }

        return redirect('/film')->with('success', 'Film berhasil dihapus');
    }
}
