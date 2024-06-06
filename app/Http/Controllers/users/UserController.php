<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    //
    public function index(){
        $roles=Role::orderBy('id','ASC')->where('name','!=','Admin')->get();
        return view('users.index',compact('roles'));
    }

    public function store(Request $request){
        dd($this->getIp());
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
        $user->latitude=Auth::user()->latitude;
        $user->longitude=Auth::user()->longitude;
        $user->save();
        $user->agentcode='abc'.$curYear.$user->id;
        $user->save();

        return back()->with('success',__('messages.usersave'));
    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return null; // it will return the server IP if the client IP is not found using this method.
    }
    
}
