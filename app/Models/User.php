<?php namespace Grace\Models;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Carbon\Carbon;


/**
 * Class User 
 * @author Phillip Madsen
 */
class User extends \Cartalyst\Sentry\Users\Eloquent\User {

	protected $table = 'users';



 	public function setCreatedAtAttribute($date)	{

	    $this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
	  
	}

	public function getUpdatedAtAttribute($date) {

	    $this->attributes['updated_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}
  
 

	public function profile() {

        return $this->hasOne('Grace\Models\Profile');
    }




}
