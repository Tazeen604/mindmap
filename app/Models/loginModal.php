<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class loginModal extends Authenticatable 
{
    use HasFactory;
  //  use UserTrait;
    //use RemindableTrait;
    protected $fillable = [
        'id',
        'email'
        
    ];
}