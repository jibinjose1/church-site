<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRegister;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function home()
    {
        $currentTime = Carbon::now()->toDateTimestring();
        $returnData['currentTime'] = $currentTime;
        return view('modules.home.home',$returnData);
    }
}
