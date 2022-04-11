<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    
    protected $primaryKey = 'name';
    protected $table = "users";
    protected $fillable = [ 
        'username', 
        'email',
        'password'
    ];
    protected $hidden;
    
}




