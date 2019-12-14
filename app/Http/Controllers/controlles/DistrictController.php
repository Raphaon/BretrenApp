<?php

namespace App\Http\Controllers\controlles;

use App\Http\Controllers\Controller;
use App\Models\Church;
use App\Models\District;
use App\Services\appFunction;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $mesFontions  = new appFunction();
        //$districtCode = request('districtCode');
        $districtCode ="MPE001YDE01";
        $dist= $mesFontions->getDistrictByCode($districtCode);
        $district = new District();
        $district->toDistrict($dist);
        return view("District/index", compact("district"));
    }
}
