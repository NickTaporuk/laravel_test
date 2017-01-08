<?php
/**
 * Created by IntelliJ IDEA.
 * User: nick
 * Date: 08.01.17
 * Time: 18:24
 */

namespace App\Repositories;

use App\User;
use App\Note;

class NoteRepository
{
    public function forUser(User $user)
    {
        return Note::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}