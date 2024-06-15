<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\LoginModel;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Cookie;

class UserModelController extends Controller
{
    public function login(){
        $role=Role::get();
        return view('Auth.login',compact('role'));
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'mobile' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'],
            'state' => ['required'],
            'city' => ['required'],
            'pincode' => ['required', 'regex:/^[1-9][0-9]{5}$/'],
            'address' => ['required'],
            'shopname' => ['required'],
            'pancard' => ['required', 'regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/'],
            'aadharcard' => ['required', 'regex:/^\d{12}$/']
        ]);
        if($validator->fails()){
            return response()->json(['success'=>false,'msg'=>'Wrong Input Format']);
        }
        $user = new UserModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->pincode = $request->pincode;
        $user->address = $request->address;
        $user->shopname = $request->shopname;
        $user->aadharcard = $request->aadharcard;
        $user->latitude = $request->latitude;
        $user->longitude = $request->longitude;
        $user->ip=IP($request);
        $user->save();
        return response()->json(['success'=>false,'msg'=>'Registered Successfully']);
         dd($request);
    }

    public function verifylogin(Request $request){
        // dd($request);
       // dd(gethostbyname(gethostname()),$_SERVER['REMOTE_ADDR'],$request->ip());
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
        $ip=IP($request);
        if(Auth::attempt($credentials,$request->has('remember'))){
            $user=Auth::user();
            UserModel::updatelogs($user->id,$request->longitude ,$request->latitude,$ip);
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
