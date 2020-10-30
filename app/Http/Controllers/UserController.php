<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{

    // public function __construct ()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user_name = auth()->user();

        return view('user.user',compact('user_name'));
    }
    
}
