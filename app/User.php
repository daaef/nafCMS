<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends EloquentUser {
	use Notifiable;
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 
		'last_name', 
		'email', 
		'phone', 
		'password',
		'username',
		'user_role',
		'slug',
	];

	protected $loginNames = ['email', 'username'];

	protected $dates = ['deleted_at'];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public static function byEmail($email) {
		return static::whereEmail($email)->first();
	}

	// public function roles() {
 //    return $this->belongsToMany('App\Role', 'roles_users', 
 //      'role_id', 'user_id');
 //  }
}
