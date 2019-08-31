<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model {
  
  protected $fillable = [
    'name',
    'rank',
    'slug', 
    'bio', 
    'profile_image', 
    'cad_id'
  ];

  public function cas() {
    return $this->belongsTo('App\Cas');
  }
}
