<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * used to register a new user
     * 
     *  @param Request $request
     * 
     * @return View
     */
    public function create(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        Auth::login($user);
        return redirect('/selector');

    }

    /**
     * used to show the login page and login a user
     * 
     * @param Request $request
     * 
     * @return View
     */
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }else{
            return back()->withErrors(['message' => 'Email o contraseña incorrectos']);
        }
    }

    /**
     * used to logout a user
     * 
     * @return View
     */
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function updateName(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->save();
        return redirect('/profile');
    }

}
