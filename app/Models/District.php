<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Church;
class District extends Model
{
    protected $table = "fgm_district";
    
    public function getChurch()
    {
        return Church::where("districtParentReff", $this->districtCode)->get();
    }
    public function getChurchNumber()
    {
        return Church::where("districtParentReff", $this->districtCode)->count();
    }
    public function getMemberNumber()
    {
        return Membre::where("districtParentReff", $this->districtCode)->count();
    }
    public function toDistrict($dist)
    {
        $this->districtCode = $dist->districtCode;
        $this->districtName = $dist->districtName;
        $this->codeArea = $dist->codeArea;
        $this->isDelete = $dist->isDelete;
    }
}
