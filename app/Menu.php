<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model {
  use SoftDeletes;

  protected $fillable = [
    'name',
    'slug', 
    'page_score',
  ];

  protected $dates = ['deleted_at'];

  public function pages() {
    return $this->hasMany('App\Page');
  }
}
