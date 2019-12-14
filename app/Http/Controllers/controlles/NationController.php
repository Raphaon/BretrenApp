<?php

namespace App\Http\Controllers\controlles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\appFunction;
class NationController extends Controller
{

    public function home()
    {
        return view("welcome");
    }
    public function index()
    {

        $myFunction = new appFunction();
        $nbre_region  = $myFunction->getNbreArea();
        $areas  = $myFunction->getArea();
        $nbreDistrict = $myFunction->getNbreDistrict();
        $nbreOfChurch = $myFunction->getnumberOfChurch();
        $nbreOfMember = $myFunction->getNumberOfMember();
        return view("Nation/index", compact('areas', "nbre_region", "nbreDistrict", "nbreOfChurch", "nbreOfMember"));
    }

    public function indexActus()
    {

    }

    public function envoyerMsg()
    {

    }
    public function fairePost()
    {

    }

    public function statistics()
    {

    }

    public function createRegion(){}
    public function createDistrict() {}
    public function createChurch(){}
    public function member(){}


}
