<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table  = "users";
    private $isAuth ;
    private $privilege ;
    public function __construct()
    {
        $this->isAuth = false;
        $this->privilege ="Invite";
    }

    public function isAuth(){return $this->isAuth;}
    public function setIsAuth($newVal) {$this->isAuth = $newVal;}
    public function setPrivilege($newVal){$this->privilege = $newVal;}
    public function getPrivilege(){return $this->privilege;}
}
