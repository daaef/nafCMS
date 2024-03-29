<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCategory extends Model {	

	protected $fillable = [
		'name',
		'description',
		'slug', 
	];

	protected $casts = [
		'permissions' => 'array',
	];

}
