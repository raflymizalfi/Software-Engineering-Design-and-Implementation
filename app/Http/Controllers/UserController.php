<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        
        Auth::attempt($request->only("email", "password"));

        if (Auth::check()) {
            return redirect("/");
        }

        Session::flash("message", "user is not exist");
        return redirect()->back();
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->first_name . " " . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash("message", "register is success");
        return redirect()->to("login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to("login");
    }
}
