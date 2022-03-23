<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template_page extends Model
{
    use HasFactory;

    protected $fillable=[
        'temp_id',
        'page_name',
        'slug_url',
        'page_type',
        'page_layout',
        'header_depenndancy',
        'footer_dependanc',
        'active',
        'added_on'


    ];
}
