<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Session;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Libraries\AuthenticatorLibrary;

class AuthorizationController extends Controller
{
    
    public function index() {

        $authToken = Session::get('auth_token');

        if (!empty($authToken))
            return redirect('/home');

        return view('login');

    }

    public function login(Request $request) {

        $requestData = $request->all();

        if (!array_key_exists('user', $requestData)
            || empty($requestData['user'])
            || !array_key_exists('pass', $requestData)
            || empty($requestData['pass'])
            )
            return redirect('/login');
            
        $user = User::where('user', $requestData['user'])->first();
            
        if (empty($user))
            return redirect('/login');

        if (!Hash::check('garupa', $user->pass))
            return redirect('/login');

        Session::put('auth_token', AuthenticatorLibrary::encodeToken($user->user, $user->pass));
        Session::put('user_id', $user->id);

        return redirect('/home');

    }

    public function logout() {

        Session::forget('auth_token');
        Session::forget('user_id');

        return redirect('/login');

    }

}
