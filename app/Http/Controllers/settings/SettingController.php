<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Permissions;
use App\Models\Role;

class SettingController extends Controller
{
    public function index(){
        $paginate=paginate();
        $roles=Role::orderBy('id','ASC')->get();
        $permission=Permissions::cursorPaginate($paginate);
        return view('settings.index',compact('roles','permission'));
    }

}
