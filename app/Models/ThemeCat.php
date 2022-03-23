<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeCat extends Model
{
    public $table = 'theme_cat';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
        'active',
        'added_on',  
    ];

}
