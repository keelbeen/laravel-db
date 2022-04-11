<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = "users";
    protected $fillable = [ 
        'username',
        'store', 
        'storeAddress', 
        'email',
        'password'
    ];
    protected $hidden;
}
