<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request){

        $username = $request->input('username');
		$password = $request->input('password');
        if (Auth::attempt(["username" => $username, "password" => $password])) {
            $user = Auth::user();
            return response()->json($user->id, 200);
		} else {
            $data = array("data" => null);
			return response()->json($data, 400);
		}
    }


}
