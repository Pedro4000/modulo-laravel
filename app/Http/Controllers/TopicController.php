<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Topic};
use App\Http\Controllers\Controller;


class TopicController extends Controller
{

    public function create(Request $request) {

        return view('topic.create');
    }

    public function read(Request $request, int $topicId) {

        $topic = Topic::find($topicId);

        return view('topic.read', [
            'topic' => $topic,
        ]);
    }

    public function store(Request $request) {

        $topic = new Topic();
        $topic->title = $request->get('title');
        $topic->description = $request->get('description');
        $topic->user_id = session('user')->id;

        $topic->save();

        return redirect()->route('home');
    }

    public function update(Request $request) {

    }

    public function delete(Request $request) {

    }
}
