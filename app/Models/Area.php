<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Church;
class Area extends Model
{

    protected $table  = 'fgm_area';

    public function getNumberOfDistrict()
    {
        return District::where('codeArea', $this->areaCode)->count();
    }
    public function getDistrictOfArea()
    {
         return District::where('codeArea', $this->areaCode)->get();
    }

    public function toArea($areadb)
    {
        $this->areaCode = $areadb->areaCode;
        $this->areaName = $areadb->areaName;
        $this->isDelete = $areadb->isDelete;
        $this->areaCity = $areadb->areaCity;
        $this->id = $areadb->id;
    }

    public function getChurch()
    {
                    return Church::join("fgm_district","districtParentReff", "districtCode")
                    ->where("codeArea", $this->areaCode)
                    ->get();
    }

    public function getNbreChurch()
    {
        return Church::join("fgm_district","districtParentReff", "districtCode")
                    ->where("codeArea", $this->areaCode)
                    ->count();
    }
    public function isExist(){
        if(Area::where("areaCode", $this->areaCode)->count()>1){
            return true;
        }
        return false ;
    }

    public function __construct()
    {
        $this->areaCode = "Unknow";
        $this->areaName = "Undefined";
        $this->areaCity = "Unknow";
    }


/*
    public function save()
    {
        if(!$this->isExist())
        {
            if($this->areaCode != "" and $this->areaCode != "Unknow" and $this->areaName != "" and $this->areaName !="Undefined")
            {
                $this->store();
                return "success";
            }
        }
        return "area saved ";
    }
*/


}
