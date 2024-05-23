<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\LoginModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class UserModelController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function logout(){
        Auth::logout();
         return redirect('/login');
    }
    public function verifylogin(Request $req){
        //  dd($req);
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials,$req->has('remember'))){
          $user=Auth::user();
          //dd($user);
          $update=UserModel::updatelogs($user->id,$req->longitude ,$req->latitude);
          Alert::success('success', 'Login successful!');
          $loginModel = LoginModel::createOrUpdateLoginModel($user->id);
          return response()->json([
            'success' => true,
            'message' => 'Login successful!',
        ]);
        }else{
            Alert::error('Error', 'Invalid email or password');
            return response()->json(['success' => false, 'message' => 'Invalid credentials.'], 401);
        }
    }
}
