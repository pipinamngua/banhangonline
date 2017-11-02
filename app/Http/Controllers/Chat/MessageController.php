<?php

namespace App\Http\Controllers\Chat;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LRedis;
use Session;
use App\Message;
use App\Events\RedisEvent;

class MessageController extends Controller
{
   	/*public function __construct()
   	{
   		$this->middleware('guest');
   	}*/


    public function index()
    {
      $message = Message::all();
      return view('clients.chat.writemessage',['message'=>$message]);
    }

    public function postSendMessage(Request $request)
    {
        /*$message = Message::create($request->all());
        event(
          $e = new RedisEvent($message)
        );*/

        $this->validate($request,
          [
            'content'=>'required',
          ],
          [
            'content.required'=>'Bạn phải nhập tin nhắn'
          ]
        );
        $m = new Message();
        if($request->email == null)
        {
          $m->name = "unknown";
        }
        else
        {
            $m->name = $request->name;
        }
        
        if($request->email == null)
        {
          $m->email = "unknown@gmail.com";
        }
        else
        {
          $m->email = $request->email;
        }
        $m->content = $request->content;
        $m->channel = md5($m->id).md5($m->name);
        $m->date_send = date('Y-m-d');
        $m->save();

        $message = ['id'=>$m->id,'name'=>$m->name ,'content'=>$m->content,'channel'=>$m->channel,'date_send'=>$m->date_send];
        $redis = LRedis::connection();
        $redis->publish("client-1",json_encode($message));
        return redirect()->back();
    }

    public function testing(){
      $message = ['id'=> '1111','name'=> 'testing','content'=>'eeee','channel'=>'192.168.2.8','date_send'=>'2017-11-01'];
        
        $redis = LRedis::connection();
        $redis->publish("client-1",json_encode($message));
    }
    
}