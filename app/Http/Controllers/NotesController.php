<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\NoteRepository;

class NotesController extends Controller
{
    public function __construct(NoteRepository $notes)
    {
        $this->notes = $notes;
//        $user = User::first();
//        dump($this->notes->forUser($user));exit;
    }
    public function store(Request $request, Card $card)
    {
        $this->validate($request, [
            'body' => 'required| min:10'
        ]);
        $note = new Note($request->all());
//        $note->user_id = Auth::id();
//        $note->user_id = 1;
//        $note->by(Auth::user());
        $card->addNote($note,1);

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return back();
    }
}
