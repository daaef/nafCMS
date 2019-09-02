<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model {
  protected $fillable = [
    'email'
  ];

  public static function byEmail($email) {
    return static::whereEmail($email)->first();
  }
}
