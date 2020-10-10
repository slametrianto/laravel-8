<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost(){
        $test = DB::table('posts')->get();
        return view('test',compact('test'));
    }

    public function addPost(){
         return view ('add-post');
    }

    public function addPostSubmit(Request $request){
        //insert DB
        DB::table('posts')->insert([
           'title' => $request->title,
           'body'=> $request->body
        ]);
        return back()->with('post_created', 'post has been created successfully');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('single-post', compact('post'));
    }

    public function deletePost($id){
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'pos has been deleted successfully');
    }

    public function editPost($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('edit-post', compact('post'));

    }

    public function updatePost(Request $request){
        DB::tableh('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back()->with('post_updated', 'post has been updated success');

    }

    public function innerJoinCaluse(){
        $request = DB::table('users')
        ->join('posts', 'users.id', '=', 'posts.user_id')
        ->select('users.name', 'posts.title', 'posts.body', 'users.phone')
        ->get();

        return $request;
    }

    public function leftjoinClause(){
        $result = DB::table('users')
        ->leftJoin('posts', 'users.id', '=', 'posts.user_id', 'users.email')
        ->get();
        return $result;
    }

    public function rightjjoinClause(){
        $result = DB::table('users')
        ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
        ->get();
        return $result;
    }

    public function getAllPostUsingModel(){
        $post = Post::all();
        return $post;
    }
}
