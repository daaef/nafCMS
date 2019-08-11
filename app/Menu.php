<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model {
  use SoftDeletes;

  protected $fillable = [
    'name',
    'slug', 
  ];

  protected $casts = [
    'permissions' => 'array',
  ];

  protected $dates = ['deleted_at'];
}
