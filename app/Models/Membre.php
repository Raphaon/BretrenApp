<?php

namespace App\Models;

use App\Services\appFunction;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $table = "membre";
    public function transferTo($church)
    {
        $transfer = new appFunction;
        $transfer->reffTransfer = date("YMD");
        $transfer->codeChurch = $church->stationCode;
        $transfer->codeChurch = $church->stationCode;
        $transfer->memberTransfered = $this->mleMembre;
        $transfer->dateTransfer = date("Y-M-D");
        $transfer->statusTransfer = "Encours";
        $transfer->recommandationLetter = "Undefined";

    }
}
