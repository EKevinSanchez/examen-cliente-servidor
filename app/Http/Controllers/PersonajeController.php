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
}
