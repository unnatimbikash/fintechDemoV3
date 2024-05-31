<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Role;

class SettingController extends Controller
{
    public function index(){
        $roles=Role::orderBy('id','ASC')->get();
        return view('settings.index',compact('roles'));
    }

    public function addrole(Request $request){
        $name=$request->rolename;
        $displayname=$request->displayName;

        $validator=Validator::make($request->all(), [
            'rolename' => ['required','unique:roles,name'],
            'displayName' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success'=>false,'msg'=>'Wrong Inputfield Format']);
        };
        $role=new Role();
        $role->name=$name;
        $role->slug=$displayname;
        $role->save();
        return response()->json(['success'=>true,'msg'=>'Role Added Successfully']);
    }
}
