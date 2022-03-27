<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //mandar a llamar el modelo comic
    public function show(){
        $comic = Comic::all();
        return ($comic);
    }
}
