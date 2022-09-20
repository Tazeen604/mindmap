<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignInUser extends Model
{
    protected $table = 'signInUser';
    protected $fillable = [
        'id',
        'email' ,
        'username'       
    ];
    const UPDATED_AT = null;
//to turn off timestamp completely
public $timestamps = false;
}
