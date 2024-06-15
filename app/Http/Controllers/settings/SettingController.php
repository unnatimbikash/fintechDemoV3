<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function __construct()
    {
       // $this->middleware(['role:Admin','permission:viewuser|adduser']);
        $this->middleware(['permission:sidebarsetting'])->only(['index']);
       // $this->middleware(['permission:adduser'])->only(['store']);
    }
    public function index(){
        return view('settings.index');
    }

}
