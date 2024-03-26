<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function show($videoId)
    {
        $video = Link::findOrFail($videoId);
        $linkId = $video->id;
        $comments = Comment::where('link_id', $videoId)->with('user')->get();

        return view('video', ['video' => $video, 'linkId' => $linkId, 'comments' => $comments]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'feedback' => 'required|string|max:255',
            'link_id' => 'required|exists:link,id',
        ]);

        $comment = new Comment();
        $comment->feedback = $validatedData['feedback'];
        $comment->user_id = auth()->id();
        $comment->link_id = $validatedData['link_id'];
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
