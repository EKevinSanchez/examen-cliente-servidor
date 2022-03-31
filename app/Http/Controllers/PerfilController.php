<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarRequest;
use App\Models\perfil;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PerfilController extends Controller
{
    public function update(Request $request){
        $avatar = new perfil();
        $avatar->user_id = $request->user_id;
        $avatar->avatar = $request->avatar;
        $avatar->save();
        return redirect('/profile');
        
    }

    /** 
    * mostrar el avatar del perfil
    *
    * @return View
    */ 
    public function show($id){
        $avatar = perfil::all();
        return ($avatar);
    }
}
