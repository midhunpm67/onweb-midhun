<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateInfo extends Model
{
    use HasFactory;

    public $table = 'template_info';
    protected $fillable = ['template_name','template_layout','slug_url','cat_id','sub_id','theme_id'];
}