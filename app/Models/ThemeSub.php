<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeSub extends Model
{
    public $table = 'theme_sub';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name',
        'cat_id',
        'active',
        'added_on',  
    ];

}
