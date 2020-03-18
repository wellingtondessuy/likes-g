<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

use App\Models\Action;
use Session;

class HomeController extends Controller
{
    
    public function index() {

        $totalLikes = Action::where('action', 'LIKE')->count();
        $totalDislikes = Action::where('action', 'DISLIKE')->count();

        return view('home')
                ->with('actionUrl', url('/home/action'))
                ->with('logoutUrl', url('/authorization/logout'))
                ->with('totalLikes', $totalLikes)
                ->with('totalDislikes', $totalDislikes)
                ;

    }

    public function action(Request $request) {

        $requestData = $request->all();

        if (!array_key_exists('action', $requestData) || !in_array($requestData['action'], ['LIKE', 'DISLIKE']))
            return response()->json([], 400);

        $action = new Action;
        $action->user_id = Session::get('user_id');
        $action->action = $requestData['action'];

        if (!$action->save())
            return response()->json([], 400);

        $count = Action::where('action', $requestData['action'])->count();

        return response()->json([ 'total' => $count ], 200);

    }

}
