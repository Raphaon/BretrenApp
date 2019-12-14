<?php

namespace App\Http\Controllers\controlles;

use App\Http\Controllers\Controller;
use App\Services\appFunction;
use Illuminate\Http\Request;
use App\Models\Area;
class AreaController extends Controller
{
    public function index(Request $request)
    {
        $areaCode = request('areaCode');
        $myfonction = new appFunction;
        $regiondb = $myfonction->getAreaByCode($areaCode);
        $area = new Area();
        $area->toArea($regiondb);
        $area->getDistrictOfArea();
        $area->toArea($regiondb);
        return view("Area/index", compact("area"));
    }

    public function stat()
    {

        $areaCode = "MPECE0001";
        $myfonction = new appFunction;
        $regiondb = $myfonction->getAreaByCode($areaCode);
        $area = new Area();
        $area->toArea($regiondb);
        $area->getDistrictOfArea();
        $area->toArea($regiondb);
        return view("Area/index", compact("area"));
    }

}
