<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRegister;
use Crypt;

class RegisterController extends Controller
{
    public function register()
    {
        return view('modules.register.register');
    }
    public function doRegister(Request $request)
    {
        $fullName           = $request->fullname;
        $address            = $request->address;
        $pincode            = $request->pincode;
        $email              = $request->email;
        $phone              = $request->phone;
        $userName           = $request->userName;
        $password           = $request->password;
        $encryptPassword    = Crypt::encrypt($password);

        $newUser                = new userRegister;
        $newUser->fullName      = $fullName;
        $newUser->address       = $address;
        $newUser->pinCode       = $pincode;
        $newUser->email         = $email;
        $newUser->phone         = $phone;
        $newUser->username      = $userName;
        $newUser->password      = $encryptPassword;
        $newUser->save();
        return view('modules.login.login');
    }
}
