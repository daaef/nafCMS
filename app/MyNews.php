<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyNews extends Model
{
    protected $fillable = [
		'title',
		'body',
        'slug',
        'news_image',
        'news_category',
        'tags' 
	];
}
