<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUserName(){
        return 'Mahmoud Elokaily';
    }

    public function getIndex(){
        return view('welcome');
    }
}
