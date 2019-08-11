<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'slug', 
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    protected $dates = ['deleted_at'];
}
