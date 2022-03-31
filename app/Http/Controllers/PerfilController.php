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
}
