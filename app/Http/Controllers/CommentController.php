<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \App\Models\Comment;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    public function store(){
        $data = request()->validate([
            'content'=>'required',
            'user_id'=>'required',
            'blog_id'=>'required'
        ]);
        $comment = Comment::create($data);
        return redirect()->back();
    }
    public function like(Comment $comment){
        $user_id = request()->user_id;
        if($comment->users()->where('user_id', $user_id)->exists()){
            $comment->users()->detach([$user_id]);
        }else{
            $comment->users()->attach([$user_id]);
        }
        $comment->likes = $comment->users()->count();
        $comment->save();

        return response()->json(['success' => true, 'likes' => $comment->likes,'commentId'=>$comment->id]);
    }
}
