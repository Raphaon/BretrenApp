<?php

namespace App\Http\Controllers\controlles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('user/login');
    }
}
