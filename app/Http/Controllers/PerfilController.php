<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarRequest;
use App\Models\perfil;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PerfilController extends Controller
{
    /**
     * Cambiar el avatar de un usuario
     *
     * @param Request $request
     * 
     * @return View
     */
    public function update(Request $request){
        $perfil = perfil::where('user_id', Auth::user()->id)->first();
        $perfil->user_id = $request->user_id;
        $perfil->avatar = $request->avatar;
        $perfil->save();
        return redirect('/profile');
        
    }

    /** 
    * mostrar el avatar del perfil
    *
    * @return Array
    */ 
    public function show($id){
        $avatar = perfil::where('user_id', $id)->first();
        return ($avatar);
    }

    /**
     * Seleccionar la imagen de perfil por primera vez
     *
     * @param Request $request
     * 
     * @return View
     */
    public function create(Request $request){
        $perfil = new perfil();
        $perfil->user_id = $request->user_id;
        $perfil->avatar = $request->avatar;
        $perfil->save();
        return redirect('/profile');
    }
}
