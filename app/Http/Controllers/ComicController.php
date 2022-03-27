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

    /**
     * Manda a llamar el modelo de Comic y busca un comic en especifico mediante ID
     * 
     * @param  int  $id
     * @return Array
     */
    public function showOne($id){
        $comic = Comic::find($id);
        return ($comic);
    }
}
