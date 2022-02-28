<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRegister;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    public function home()
    {
        $currentTime = Carbon::now()->toDateTimestring();
        $returnData['currentTime'] = $currentTime;
        return view('modules.home.home',$returnData);
    }
    public function history()
    {
        return view('modules.history.history');
    }
    public function about()
    {
        return view('modules.about.about');
    }
    public function gallery()
    {
        return view('modules.gallery.gallery');
    }
    public function contact()
    {
        return view('modules.contact.contact');
    }
    public function downloads()
    {
        return view('modules.downloads.downloads');
    }
    public function saveUserMessage(Request $request)
    {
        $name       = $request->get('yourName');
        $email      = $request->get('yourEmail');
        $message    = trim($request->get('yourMessage'));

        $newComment           = new Comment;
        $newComment->name     = $name;
        $newComment->email    = $email;
        $newComment->message  = $message;
        $newComment->save();

        return redirect('/');
    }
    public function sample()
    {
        // $currentDate = Carbon::now();
        // $returnData['currentDate'] = $currentDate;
        return view('modules.sample.sample');
    }
}
