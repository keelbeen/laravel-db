<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Akun extends Model
{
    use softDeletes;
    protected $primaryKey = 'name';
    protected $table = "users";
    protected $fillable = [
        'name', 
        'username', 
        'email',
        'password'
    ];
    protected $hidden;
}


