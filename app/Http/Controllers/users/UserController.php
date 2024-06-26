<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;



class UserController extends Controller
{
    public function __construct()
    {
       // $this->middleware(['role:Admin','permission:viewuser|adduser']);
        $this->middleware(['permission:viewuser'])->only(['index']);
        $this->middleware(['permission:adduser'])->only(['store']);
    }

    public function index(){
        $roles=Role::orderBy('id','ASC')->get();
        $users=User::paginate(paginate());
        return view('users.index',compact('roles','users'));
    }

    public function store(Request $request){
        dd('ok');
        $validate=$request->validate([
            'roleid'=>'required|numeric',
            'name'=>'required|alpha',
            'email'=>'required|unique:users,email',
            'mobile'=>'required|numeric|digits_between:9,11',
            'password'=>'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
            'conformpassword'=>'required_with:password|same:password',
        ]);

        $curYear = date('Y');
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->password=Hash::make($request->conformpassword);
        $user->role_id=$request->roleid;
        $user->parent_id=Auth::user()->id;
        $user->login=date("Y-m-d h:i:s");
        $user->ip=IP($request);
        $user->latitude=Auth::user()->latitude;
        $user->longitude=Auth::user()->longitude;
        $user->save();
        $user->agentcode='abc'.$curYear.$user->id;
        $user->save();
        $user->syncRoles(Role::findById($request->roleid));

        return back()->with('success',__('messages.usersave'));
    }

   public function resetpassword(Request $request){
    if(!User::where('id',$request->id)->where('password',Hash::make($request->previouspassword))->first()){
      return response()->json(['error'=>'check your previous password'],500);
    }else if($request->password===$request->confirmpassword){
        User::where('id',$request->id)->update(['password'=>$request->password]);
        return response()->json(['messasge'=>'updated successfully'],200);
    }else{
        return response()->json(['error'=>'password does not match'],500);
    }
   }
   public function edit($id){
     $user=User::where('id',$id)->first();
     return view('users.edit',compact('user'));
   }
}
