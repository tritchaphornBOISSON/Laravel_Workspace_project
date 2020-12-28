<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'require'
        ]);

        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $annonces = Annonce::find($request->get('annonces_id'));
        $annonces->comments()->save($comment);

        return back()->withMessage('comment created');

    }

    public function showComment($id)
    {   
        $annonces = Annonce::with('comments')->find($id);
        return view('show')->with('comments', $annonces->comments);
    }

    

  

    public function destroy($id)
{
    $user_id = Auth::id(); 
    $comment= Comment::where('id', $id)->where('user_id',$user_id)->first(); 
    
    if(!is_null($comment)){
        
        $comment->delete();
    }
    return redirect()->back();
}
}
