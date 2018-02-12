<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends \TCG\Voyager\Models\User
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token', 'email', 'avatar', 'role_id', 'created_at', 'updated_at'
	];

	/**
	 * Get the projects (i.e., posts) for an user.
	 */
	public function posts() {
		return $this->hasMany('App\Post', 'author_id');
	}

}
