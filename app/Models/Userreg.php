<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userreg extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','mobile','username','Password'];
}