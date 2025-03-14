<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; 

    protected $primaryKey = 'id';

    public $timestamps = false; 
    public $incrementing = true; 
    protected $keyType = 'int';  

    protected $fillable = [
        'username', 
        'password', 
        'gender'
    ];
}
