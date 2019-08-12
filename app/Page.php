<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
  use SoftDeletes;
  // protected $dates = ['deleted_at'];
  protected $fillable = [
    'page_title',
    'description',
    'page_content',
    'feature_image',
    'banner_image',
    'banner_text',
    'banner_description',
    'slug',
    'page_type_id',
    'user_id',
    'published',
    'visibility',
  ];

  public function pageType() {
    return $this->belongsToMany('App\PageType');
  }
}
