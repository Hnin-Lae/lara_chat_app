<?php

namespace App\Http\Controllers;
use App\Models\Session;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send(Session $sessions,Request $request)
    {
        $message = $sessions->messages()->create(['content'=>$request->content]);
        $message->createForSend($sessions->id);
        $message->createForReceive($sessions->id,$request->to_user);
        return response($message,200);

    }
}
