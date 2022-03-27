<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Manda a llamar el modelo de Comic y retorna todos los comics
     *
     * @return Array
     */
    public function show(){
        $comic = Comic::all();
        return ($comic);
    }
}
