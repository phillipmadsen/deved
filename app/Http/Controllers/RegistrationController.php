<?php namespace Grace\Http\Controllers;

use Grace\Http\Requests;
use Grace\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegistrationController extends Controller {

	 
		public function create()
		{
			return View::make('registration.create');
		}


}
