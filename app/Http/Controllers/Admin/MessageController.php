<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
class MessageController extends Controller
{
    public function index()
   	{
   		return view('admin.chat.list-userchat');
   	}

   	
}
