<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Topic, Message};
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    public function create(Request $request) {

        $topics = Topic::get();

        return view('message.create', [
            'topics' => $topics ?? [],
        ]);
    }

    public function read(Request $request, $messageId) {

        $message = Message::find($messageId);

        return view('message.read', [
            'message' => $message,
        ]);
    }   

    public function store(Request $request) {
        
        $message = new Message();
        $message->content = $request->get('content');
        $message->topic_id = $request->get('topic');
        $message->user_id = session('user')->id;
        $message->save();

        return redirect()->route('home');
    }

    public function update(Request $request) {

    }

    public function delete(Request $request) {

    }
}
