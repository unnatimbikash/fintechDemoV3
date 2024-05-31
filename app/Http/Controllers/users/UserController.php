<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return "hello from member";
        // dd('ok');
        //return view('settings.index',compact('roles'));
    }
}
