<?php namespace Grace\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Grace\Services\LoremIpsumGenerator;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

}
