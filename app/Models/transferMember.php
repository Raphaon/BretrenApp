<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\appFunction;

class transferMember extends Model
{
    protected $table  ="transfermember";

    public function saveTransfer()
    {
        $transfer = new appFunction;
        $transfer->reffTransfer = date("YMD");
        $transfer->codeChurch = null;

    }

}
