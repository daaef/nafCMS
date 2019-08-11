<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model {
  
  use SoftDeletes;

  protected $fillable = [
    'name', 
    'permissions',
    'description', 
    'slug', 
  ];

  protected $casts = [
    'permissions' => 'array',
  ];

  protected $dates = ['deleted_at'];

  // public function users() {
  //   return $this->belongsToMany('App\User', 'roles_users', 
  //     'role_id', 'user_id');
  // }

  
}
