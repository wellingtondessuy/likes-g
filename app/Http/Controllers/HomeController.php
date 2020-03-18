<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function index() {

        return view('home');

    }

    public function action(Request $request) {



    }

}
