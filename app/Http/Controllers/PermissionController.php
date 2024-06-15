<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissions;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
       // $this->middleware(['role:Admin','permission:viewuser|adduser']);
        $this->middleware(['permission:add'])->only(['store']);
        $this->middleware(['permission:edit'])->only(['edit']);
        $this->middleware(['permission:delete'])->only(['store']);
        $this->middleware(['permission:view'])->only(['index']);
    }
    
    public function index(){
        $permission=Permission::orderBy('group','ASC')->Paginate(paginate());
        return view('users.permission.index',compact('permission'));
    }
    public function store(Request $request){
        $validate=$request->validate([
            'name'=>['required','unique:permissions,name'],
            'displayName'=>['required','unique:permissions,display_name'],
            'group'=>['required']
        ]);
          
        Permission::create(['name' =>$request->name,'display_name'=>$request->displayName,'group'=>$request->group]);
        return back()->with('success',__('messages.permissionsave'));
    }
}
