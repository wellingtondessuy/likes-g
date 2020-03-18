<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthorizationController extends Controller
{
    
    public function index() {

        return view('login');

    }

    public function login(Request $request) {

        die(var_dump($request->all()));

    }

}
