<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cas extends Model {
  protected $fillable = [
    'cas_title',
    'description',
    'slug', 
  ];

  public function leaderships() {
    return $this->hasMany('App\Leadership');
  }
}
