<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Manda a llamar el modelo de Personaje y retorna todos los personajes
     *
     * @return Array
     */
    public function show(){
        $personajes = Personaje::all();
        return ($personajes);
    }

    /**
     * Manda a llamar el modelo de Personaje y busca un personaje en especifico mediante ID
     * 
     * @param  int  $id
     * @return Array
     */
    public function showOne($id){
        $personaje = Personaje::find($id);
        return ($personaje);
    }
}
