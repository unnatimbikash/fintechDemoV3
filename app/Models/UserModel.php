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

  public static function updatelogs($userid,$longitude,$latitude){
      date_default_timezone_set("Asia/Kolkata");
      $data=self::where('id',$userid)->update(['lastlogin'=>date("Y-m-d h:i:s"),'latitude'=>$latitude,'longitude'=>$longitude]);
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
