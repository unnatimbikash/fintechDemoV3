<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users';

    // Define the primary key
    protected $primaryKey = 'id';

  public static function updatelogs($userid,$longitude,$latitude,$ip){
        $user=self::find($userid);
        $data=self::where('id',$userid)->update(['login'=>date("Y-m-d h:i:s"),'lastlogin'=>$user->login,'latitude'=>$latitude,'longitude'=>$longitude,'ip'=>$ip,'lastip'=>$user->ip,'lastlatitude'=>$user->latitude,'lastlongitude'=>$user->longitude]);
        return true; 
  }

  public static function credential($email,$password){
      if(is_numeric($email)){
            return ['mobile'=>$email,'password'=>$password,'status'=>'active'];
      }
      elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['email' =>$email, 'password'=>$password,'status'=>'active'];
      }
      return ['agentcode' => $email, 'password'=>$password,'status'=>'active'];
  }

}
