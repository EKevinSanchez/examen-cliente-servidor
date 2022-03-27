<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        //llamar el controlador de comics
        $comic = new ComicController();
        $comic = $comic->show();
        
        return view('index');
    }
}
