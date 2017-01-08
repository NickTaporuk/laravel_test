<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Card extends Model
{
    const PATH = '/cards/';
//    protected $fillable = ['title'];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function path()
    {
        return self::PATH.$this->id;
    }

    public function addNote(Note $note, $userId)
    {
        $note->user_id = $userId;
        return $this->notes()->save($note);
    }

}
