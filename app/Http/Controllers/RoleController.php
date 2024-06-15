<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\UserModel;
//use Auth;

class RoleController extends Controller
{
    public function __construct()
    {
       // $this->middleware(['role:Admin','permission:viewuser|adduser']);
        $this->middleware(['permission:addrole'])->only(['store']);
        $this->middleware(['permission:editrole'])->only(['edit']);
        $this->middleware(['permission:viewrole'])->only(['index']);
        $this->middleware(['permission:assignrollpermission'])->only(['assignroletopermission']);
    }
    public function index(){
        //dd(Auth::user()->getRollNames());
        $roles=Role::orderBy('id','ASC')->paginate(paginate());
        $data=Permission::get()->groupBy('group');
        return view('users.role.index',compact('roles','data'));
    }

    public function store(Request $request){
        $validator=$request->validate([
            'rolename' => ['required','unique:roles,name'],
            'displayName' => ['required'],
        ]);
        Role::create(['name'=>$request->rolename,'display_name'=>$request->displayName]);
        return back()->with('success',__('messages.addrole'));
    }

    public function assignroletopermission(Request $request){
        $Role=Role::findById($request->role_id);
        $permission=$request->data;
        if(!$permission){
            return response()->json(['status'=>'success','msg'=>__('messages.nodata')]);
        }
        $rolehaspermission=UserModel::rollpermission($request->role_id);
        foreach($rolehaspermission as $rolepermission){
            $getrolepermission=Permission::findById($rolepermission->permission_id);
            $Role->revokePermissionTo($getrolepermission);
        }
        foreach($permission as $key=>$val){
            $Permission_id=Permission::findById($key);
            $Role->givePermissionTo($Permission_id);
        }
        return response()->json(['status'=>'success','msg'=>__('messages.assignpermission')]);
    }

    public function getrollpermission(Request $request){
        $grouppermission=Permission::get()->groupBy('group');
        $data=UserModel::rollpermission($request->id);
        return response()->json(['status'=>'success','permission'=>$data,'groupdata'=>$grouppermission]);
    }
}
