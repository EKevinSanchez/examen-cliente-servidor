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

    /**
     * used to show the about comics page
     *
     * @return View
     */
    public function comics(){
        $comics = new ComicController();
        $contenidos = $comics->show();
        $titulo = "Comics";
        return view('categories', ['contenidos' => $contenidos, 'titulo' => $titulo]);
    }

    /**
     * used to show the about personajes page
     *
     * @return View
     */
    public function personajes(){
        $personajes = new PersonajeController();
        $contenidos = $personajes->show();
        $titulo = "Personajes";
        return view('categories', ['contenidos' => $contenidos, 'titulo' => $titulo]);
    }

    /**
     * used to show the login page
     *
     * @return View
     */
    public function login(){
        return view('login');
    }

    /**
     * used to show the register page
     *
     * @return View
     */
    public function signup(){
        return view('signup');
    }

    public function detalleComic($id){
        $comics = new ComicController();
        $comic = $comics->showOne($id);
        $titulo = "Comics";

        return view('anime-details',['datos' => $comic, 'titulo' => $titulo]);
    }

    public function detallePersonaje($id){
        $personajes = new PersonajeController();
        $personaje = $personajes->showOne($id);
        $titulo = "Personajes";

        return view('anime-details',['datos' => $personaje, 'titulo' => $titulo]);
    }
}
