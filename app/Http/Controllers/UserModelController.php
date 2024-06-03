<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\LoginModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Cookie;


class UserModelController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function verifylogin(Request $request){
        $validator=Validator::make($request->all(), [
            'email' => ['required'],
            'password' => ['required',
            'string',
            'min:8',
            'regex:/[a-z]/', // at least one lowercase letter
            'regex:/[A-Z]/', // at least one uppercase letter
            'regex:/[0-9]/', // at least one digit
            'regex:/[@$!%*?&#]/',],
        ]);

        if ($validator->fails()) {
            return response()->json(['success'=>false,'msg'=>'Wrong Input Format']);
        };
        if($request->remember){
            $this->checkbox($request->email,$request->password);
        }
        $credentials=UserModel::credential($request->email,$request->password);
        if(Auth::attempt($credentials,$request->has('remember'))){
            $user=Auth::user();
            UserModel::updatelogs($user->id,$request->longitude ,$request->latitude);
            return response()->json(['success' => true,'msg' => 'Login successful!',]);
        }else{
            return response()->json(['success' => false, 'msg' => 'Invalid credentials.']);
        }
    }
    private function checkbox($email,$password){
        Cookie::queue('email', $email); // 10080 minutes = 1 week
        Cookie::queue('password', $password);
        Cookie::queue('remember', 'true');
        return;
     }


}
