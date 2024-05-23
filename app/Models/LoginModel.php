<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table="login_models";
    protected $id="id";
    protected $fillable = [
        'user_id',
        'status',
    ];
    public static function createOrUpdateLoginModel(int $userId)
    {
        $loginModel = self::where('user_id', $userId)->first();

        if ($loginModel) {
            // If login model exists, update the status to active
            $loginModel->update(['status' => 'active']);
        } else {
            // If login model doesn't exist, create a new one with status active
            $loginModel = self::create([
                'user_id' => $userId,
                'status' => 'active',
            ]);
        }

        return $loginModel;
    }
}
