<?php

namespace App\Http\Controllers\MiniProject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_creation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function store_method(Request $request){
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'phone_no'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = new user_creation;
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->phone_no = $request->input('phone_no');
        $user->email = $request->input('email');
        $user->password =Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('user_details_list_uri');
    }
}
