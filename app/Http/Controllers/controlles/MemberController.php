<?php

namespace App\Http\Controllers\controlles;

use App\Http\Controllers\Controller;
use App\Services\appFunction;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $mesFonctions = new appFunction;
        $matricule = request('matriMember');
        $member = $mesFonctions->getMemberBycode($matricule);
        return view("Member/index") ;
    }
    public function profile()
    {
        return view("member/profile");
    }
    public function calendar()
    {
        return view("Member.calendar");
    }
    public function new()
    {
        return view("Member.newMember");
    }
}
