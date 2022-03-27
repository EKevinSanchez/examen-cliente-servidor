<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{

    /**
     * used to show the index page
     *
     * @return View
     */
    public function index()
    {
        $comics = new ComicController();
        $comics = $comics->show();
        $personaje = new PersonajeController();
        
        return view('index' ,['comics' => $comics, 'personajes' => $personaje->show()]);
    }

    public function comics(){
        $comics = new ComicController();
        $contenidos = $comics->show();
        $titulo = "Comics";
        return view('categories', ['contenidos' => $contenidos, 'titulo' => $titulo]);
    }

    public function personajes(){
        $personajes = new PersonajeController();
        $contenidos = $personajes->show();
        $titulo = "Personajes";
        return view('categories', ['contenidos' => $contenidos, 'titulo' => $titulo]);
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function details(){
        return view('anime-details');
    }
}
