<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;



class PostController extends Controller
{
// index home
    public function index()
    {
        // select * from posts;
        $postsFromDB = Post::all();

        $allPosts = [];
        return view('index', ['posts' => $postsFromDB]);
    }

// show post info page
    public function show(Post $post)
    {
        //select * from posts where id = $postsId;

        // $singlePostFromDB = Post::findOrFail($postId);

        // handel null page
        // if (is_null($singlePostFromDB)) {
        //     return to_route('index');
        // }

        // $singlePostFromDB = Post::where('id', $postId)->first();//model object
        // $singlePostFromDB = post::where('id', $postId)->get();// collection object

        // Post::where('title','php')->first();//select * from posts where title = 'php' limit
        //    $singlePostDB =Post::where('title','php')->get(); //select * from posts where title = 'php' all
        //     dd($singlePostDB);
        $users = User::all();

        return view('show', ['post' => $post, 'users' => $users]);
    }


//created page
    public function create()
    {
        // select * form users;

        $users = User::all();
        // dd($users);

        return view('create', ['users' => $users]);
    }

// inster data in database 'created page'

    public function store()
    {
        //$request = request();

        //dd($request->title, $request->all());

        //1- get the user data
        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        //dd($data, $title, $description, $postCreator);

        // tore the submitted data in datebase
        // $post = new Post;

        // $post->title = $title;
        // $post->description = $description;
        // $post->user_id = $postCreator;
        // $post->save();

        Post::create([
            'title'=> $title,
            'description'=> $description,
            'user_id'=>$postCreator,

        ]);


        return to_route('index');
    }

// edit page
    public function edit(Post $post)
    {
        // select * all user form DB
        $users = User::all();



        return view('edit', ['users'=>$users, 'post'=> $post]);
    }


    public function update($postId)
    {
        //1- get the user data
        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // dd($data, $title, $description, $postCreator);

        //2- Update the user data in datebase

        $singlePostDB = Post::find($postId);
        $singlePostDB->update([
            'title' => $title,
            'description'=> $description,
            'user_id'=>$postCreator,

        ]);
        //3- redirection to show
        return to_route('show', $postId );
    }


    public function destroy($postId)
    {

        $post = Post::find($postId);
        $post->delete();
        return to_route('index');
    }
}
