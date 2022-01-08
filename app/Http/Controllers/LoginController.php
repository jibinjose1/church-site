<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRegister;
use Illuminate\Support\Facades\Auth;
use Crypt;
use Session;
class LoginController extends Controller
{
    public function login()
    {
        return view('modules.login.login');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $username      = $request->username;
        $userPasswod   = $request->password;
        
        if(Auth::attempt(['username'=>$username,'password'=>$userPasswod]))
        {
            return redirect('/');
        }
       else{
           return redirect('login');
       }
    }
    
}
