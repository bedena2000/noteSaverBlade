<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function show($id)
    {
        $note = Note::findOrFail($id);
        return response()->json($note);
    }


    public function update(Request $request, Note $note) {
        $note->update($request->only('title', 'content'));
        return redirect()->back();
    }

}
