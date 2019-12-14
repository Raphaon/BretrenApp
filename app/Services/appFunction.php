<?php

namespace App\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\District;
use App\Models\Church;
use App\Models\Membre;

class appFunction
{
    // obtain the list of areas

    public function getArea()
    {
        return Area::get();
    }
    // get the numbers of areas

    public function getNbreArea(){return Area::count( ); }


/*  get the list of district */

    public function getDistrict(){return District::get(); }
    public function getNbreDistrict(){return District::count(); }

    // to get the District list of an Area
    public function getDistrictByAreaCode($areaCode)
    {
        return District::where('codeArea', $areaCode)
                ->get() ;
    }
    public function getAreaByCode($codeArea)
    {
        return Area::where('areaCode', $codeArea)->first();
    }

    public function getDistrictByCode($districtCode)
    {
        return District::where("districtCode", $districtCode)->first();
    }

    public function getnumberOfChurch(){ return Church::count();}
    public function getNumberOfMember(){return Membre::count();}

    public function getChurchByCode($churchCode){return Church::where("stationCode", $churchCode)->first();}
    public function getMemberByCode($matricMember) {return "test de get Member by code reussi ";}

    public function canAccess()
    {
        return true;
    }
}



