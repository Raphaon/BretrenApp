<?php

namespace App\Http\Controllers\controlles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Church;
use App\Services\appFunction;
class ChurchController extends Controller
{
    public function index(Request $request)
    {
        $mesFonction = new appFunction;
        //$codeChurch =  request("churchCode");
        $codeChurch ="MPE0001YDE001";
        $church = $mesFonction->getChurchByCode($codeChurch);
        return view("Church/index", compact('church'));
    }
}
