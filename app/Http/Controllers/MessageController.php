<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MessageController extends Controller{


	public function getMessage(){
		return view("message");
	}
}