<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users';

    // Define the primary key
    protected $primaryKey = 'id';

    public static function checkEmailAndPassword($email, $password)
    {
        // Find the user by email
        $user = self::where('email', $email)->first();
        // If user is found and passwords match, return the user
        if ($user && Hash::check($password, $user->password)) {
            $update=$user->update(['lastlogin'=>date("Y/m/d-h:i:sa")]);
         if($update){
            return true;
         }else{
            return false;
         }
            return $user;
        }
        return false;
    }
    public static function updatelogs($userid,$longitude,$latitude){
        $update=self::where('id',$userid)->update(['lastlogin'=>date("Y/m/d-h:i:sa"),'latitude'=>$latitude,'longitude'=>$longitude]);
         if($update){
            return true;
         }else{
            return false;
         }

    }
}
