<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index(Request $request)
    {

        dd($request);

        // dd(Route::current());
        // dd(Route::currentRouteName());
        // dd(Route::currentRouteAction());

        // code for test protect csrf
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();
        // return 'done';

    }
}
