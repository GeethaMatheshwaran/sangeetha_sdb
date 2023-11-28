<?php

namespace App\Http\Controllers\MiniProject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_creation;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function check_method(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        $name = $request->input('name');
        $password = $request->input('password');
//return (Auth::attempt(['name' => $name, 'password' => $password]));
        if(Auth::attempt(['name' => $name, 'password' => $password])){
                $user = user_creation::where('name',$name)->first();
                Auth::login($user);
                return redirect('/welcome_uri');
        }else{
            return back()->withErrors(["invalid"]);
        }
    }

    public function logoutss(){
        return view('home_uri');
        // $id = user_creation::id();
        // $data = auth::user();
            Auth::logout();

            //return redirect('/login_uri');

    }
}
