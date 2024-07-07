<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use App\Models\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
        'content' => 'required|min:2|max:255',
    ]);

    Comments::create([
        'user_id' => Auth::id(),
        'film_id' => $film_id,
        'content' => $request->input('content'),
    ]);

    return redirect('/film/'.$film_id);
}
}
