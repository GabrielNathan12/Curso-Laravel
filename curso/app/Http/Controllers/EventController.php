<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Gabriel";
        $idade = 23;
        $array = [1,3,13,1,3,4];
        $nomes = ["Gabriel", "Nathan", "Almeida" , "Silva"];
        return view('welcome',
                    ['nome' => $nome, 'idade' => $idade , 'array' => $array,
                    'nomes' => $nomes
                ]);
    }

    public function create(){
        return view('events.create');
    }
}
