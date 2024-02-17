<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;



class PostController extends Controller
{

    public function index()
    {
        // select * from posts;
        $postsFromDB = Post::all();

        $allPosts = [];
        return view('index', ['posts' => $postsFromDB]);

    }

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
        return view('show', ['post' => $post]);
    }

    public function create()
    {
                // select * form users;

        $users = User::all();
        // dd($users);

        return view('create', ['users'=> $users]);
    }

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


        return to_route('index');
    }

    public function edit()
    {

        return view('edit');
    }

    public function update()
    {
        //1- get the user data
        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // dd($data, $title, $description, $postCreator);
        //2- Update the user data in datebase

        //3- redirection to show

        return to_route('show', 1);
    }
    public function destroy()
    {
        return to_route('index');
    }
}
