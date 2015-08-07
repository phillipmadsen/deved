<?php namespace Grace\Http\Controllers;

use Grace\Http\Requests;
use Grace\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ActionsController extends Controller {

	public function register(array $data)
    {
        $user = new User(array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ));     
        $profile = new Profile(array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ));
                
        $user->save();

 		$profile = $user->profile()->save($profile);
        
        return $user;
                
    }

}
