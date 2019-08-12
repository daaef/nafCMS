<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageType extends Model {
  use SoftDeletes;
  protected $fillable = [
    'title',
    'slug', 
  ];

  protected $dates = ['deleted_at'];

  public function pages() {
    return $this->hasMany('App\Page');
  }
}
