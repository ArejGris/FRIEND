<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment=Comment::all();
        
        return $comment;
    }
    public function addComment($id){
        $post=Post::find($id);
        return view('onepost',['post'=>$post]);
    }
   public function saveComment(Request $request ,$id){
    $comment=new Comment();
    $comment->cbody=$request->cbody;
    $comment->post_id=$id;
    $comment->save();
    return redirect()->route('post.show',['id'=>$id]);
   }
   public function edit($id){
    $comment=Comment::find($id);
    $id2=$comment->post_id;
    $post=Post::find($id2);
    return view('editcomment',['comment'=>$comment,'post'=>$post]);

   }
   public function update(Request $request,$id){
    $comment = Comment::find($id);
    $comment->cbody=$request->cbody;
    $comment->save();
     $id2=$comment->post_id;
    return redirect()->route('post.show',['id'=>$id2]);
   
   }

   public function destroy($id){
    $comment=Comment::find($id);
    $comment->delete();
      $id2=$comment->post_id;
   
    return redirect()->route('post.show',['id'=>$id2]);
   }
   public function deleteAll(){
    Comment::truncate();

   }
}
