<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeNation extends Model
{
    public function index()
    {
        return view('welcome');
    }
}
