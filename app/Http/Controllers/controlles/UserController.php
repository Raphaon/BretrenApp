<?php

namespace App\Http\Controllers\controlles;

session_start();
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function login()
    {
        return view('user/login');
    }


    public function register()
    {
        return view("user/register");
    }

    public function userHome()
    {
        return view('./Member/HomeMember');
    }

    public function auth(Request $request)
    {
        $login = htmlspecialchars(request('login'));
        $password = sha1(htmlspecialchars(request('password')));
        $remember = request('remenberMe');
       if($remember != null ){$remember ='on';}

       $Userconnect = User::leftjoin('membre', 'membre.mleMembre', '=', 'users.memberReff')
                            ->where('login', $login)
                            ->where('userspass', $password)
                            ->first();  
        if($Userconnect ==null)
        {
            return redirect('login');
        }else
        {
            $Userconnect->setIsAuth(true);
            $request->session()->put("userConnect", $Userconnect);
            
            return redirect()->to('/');
        }
        
    }

    public function logout()
    {
       
        session()->put("userConnect", null);
        return redirect()->to('login');
    }
}
