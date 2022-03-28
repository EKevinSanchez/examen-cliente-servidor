<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::login($user);
        return redirect('/');

    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            //verificar password
            if(password_verify($request->password, $user->password)){
                Auth::login($user);
                return redirect('/');
            }
            
        }
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
