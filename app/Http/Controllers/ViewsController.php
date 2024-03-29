<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('auth.login');
    }

    /**
     * used to show the register page
     *
     * @return View
     */
    public function signup(){
        //comprobar si ya esta autenticado
        if(Auth::check()){
            return redirect('/');
        }
        return view('auth.signup');
    }

    /**
     * used to show the detail of a comic page
     *
     * @param int $id
     * 
     * @return View
     */
    public function detalleComic($id){
        $comics = new ComicController();
        $comic = $comics->showOne($id);
        $titulo = "Comics";

        return view('anime-details',['datos' => $comic, 'titulo' => $titulo]);
    }

    /**
     * used to show the detail of a personaje page
     *
     * @param int $id
     * @return View
     */
    public function detallePersonaje($id){
        $personajes = new PersonajeController();
        $personaje = $personajes->showOne($id);
        $titulo = "Personajes";

        return view('anime-details',['datos' => $personaje, 'titulo' => $titulo]);
    }

    /**
     * used to show all movies in a page
     *
     * @return View
     */
    public function movies(){

        if(Auth::check()){
            $movies = new ApiController();
        $xmen = $movies->GetXmen();
        $dead = $movies->GetDeadpool();
        $titulo = "Películas";
        $date = date('Y-m-d');
        return view('blog-details', ['xmen' => $xmen, 'titulo' => $titulo, 'deadpool' =>$dead, 'date' => $date]);
        }else{
            return redirect('/login')->withErrors(['message' => 'Necesitas iniciar sesión para ver esta página']);
        }
    }

    /**
     * used to show the profile page
     *
     * @return View
     */
    public function profile(){
        if(Auth::check()){
            $user = Auth::user();
            $nombre = $user->name;
            $perfil = new PerfilController();
            $avatar = $perfil->show($user->id);
            return view('blog', ['user' => $nombre, 'avatar'=>$avatar]);
        }
        return redirect('/login')->withErrors(['message' => 'Necesitas iniciar sesión para ver esta página']);
    }

    /**
     * used to show the selector of avatar page
     *
     * @return View
     */
    public function selector(){
        if(Auth::check()){
            $personajes = new PersonajeController();
                $contenidos = $personajes->show();
            return view('selector', ['contenidos' => $contenidos]);
        }
        return redirect('/login')->withErrors(['message' => 'Necesitas iniciar sesión para ver esta página']);
    }

    /**
     * used to show the page to change the profile's name
     *
     * @return View
     */
    public function updateName(){
        if(Auth::check()){

            return view('update-name');
        }
        return redirect('/login')->withErrors(['message' => 'Necesitas iniciar sesión para ver esta página']);
    }

    /**
     * used to show the page to change the profile's avatar
     *
     * @return View
     */
    public function newAvatar(){
        if(Auth::check()){
            $personajes = new PersonajeController();
                $contenidos = $personajes->show();
            return view('new-avatar', ['contenidos' => $contenidos]);
        }
        return redirect('/login')->withErrors(['message' => 'Necesitas iniciar sesión para ver esta página']);
    }
}
