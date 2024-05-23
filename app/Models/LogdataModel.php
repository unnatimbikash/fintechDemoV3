<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogdataModel extends Model
{
    use HasFactory;
    protected $table="log_sessions";
    protected $id="id";
}
