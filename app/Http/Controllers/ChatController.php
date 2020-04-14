<?php

namespace App\Http\Controllers;


use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index(){
		
		return view('chat');
	}
	
	 public function send(request $request)
    {
		$message="Fahim Muntasir";
    	$user = User::find(Auth::id());
		//return $user;
    	//$this->saveToSession($request);
    	event(new ChatEvent($message,$user));  
    }
}
