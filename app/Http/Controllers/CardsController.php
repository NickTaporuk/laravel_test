<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
//        return $card->load('notes.user');

        return view('cards.show', compact('card'));
    }

    public function insertform()
    {
        return view('cards.new');
    }

    public function store(Request $request)
    {
        $card = new Card($request->all());
        $card->save();
        return back();
    }}
