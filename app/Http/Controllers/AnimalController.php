<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
class AnimalController extends Controller
{
    public function index(){
        $animals = Animal::all();
        return view('animalsList', ['animals' => $animals]);
    }

    public function show($id){
        $animal = Animal::find($id);
        return view('singleAnimal', ['animal' => $animal ]);
    }
}
