<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $allPosts = [
            ['id' => 1, 'title' => 'PHP',    'posted_by' => 'Ahmed',  'created_at' => '2022-10-10 03:00:00', 'Description' => 'This Is Description'],
            ['id' => 2, 'title' => 'Java',   'posted_by' => 'Mohamed','created_at' => '2022-10-11 03:00:00', 'Description' => 'This Is Description'],
            ['id' => 3, 'title' => 'laravel','posted_by' => 'Ali',    'created_at' => '2022-10-12 04:00:00', 'Description' => 'This Is Description'],
            ['id' => 4, 'title' => 'CSS',    'posted_by' => 'Nour',   'created_at' => '2022-10-13 05:00:00', 'Description' => 'This Is Description'],
            ['id' => 5, 'title' => 'Python', 'posted_by' => 'Kimo',   'created_at' => '2022-10-14 06:00:00', 'Description' => 'This Is Description'],
            ['id' => 6, 'title' => 'Ruby',   'posted_by' => 'Khaled', 'created_at' => '2022-10-15 07:00:00', 'Description' => 'This Is Description'],
            ['id' => 7, 'title' => 'Api',    'posted_by' => 'Abdo',   'created_at' => '2022-10-16 08:00:00', 'Description' => 'This Is Description'],

        ];
        return view('index', ['posts' => $allPosts]);
    }

    public function show($postId)
    {

        $singlPost = [
            'id' => 1, 'title' => 'PHP',    'posted_by' => 'Ahmed',  'created_at' => '2022-10-10 03:00:00', 'Description' => 'This Is Description',
            'id' => 2, 'title' => 'Java',   'posted_by' => 'Mohamed','created_at' => '2022-10-11 03:00:00', 'Description' => 'This Is Description',
            'id' => 3, 'title' => 'laravel','posted_by' => 'Ali',    'created_at' => '2022-10-12 04:00:00', 'Description' => 'This Is Description',
            'id' => 4, 'title' => 'CSS',    'posted_by' => 'Nour',   'created_at' => '2022-10-13 05:00:00', 'Description' => 'This Is Description',
            'id' => 5, 'title' => 'Python', 'posted_by' => 'Kimo',   'created_at' => '2022-10-14 06:00:00', 'Description' => 'This Is Description',
            'id' => 6, 'title' => 'Ruby',   'posted_by' => 'Khaled', 'created_at' => '2022-10-15 07:00:00', 'Description' => 'This Is Description',
            'id' => 7, 'title' => 'Api',    'posted_by' => 'Abdo',   'created_at' => '2022-10-16 08:00:00', 'Description' => 'This Is Description',


        ];

        return view('show', ['post' => $singlPost]);
    }

    public function create(){
        return view('create');
    }

    public function store(){

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

    public function edit(){

        return view('edit');

    }

    public function update(){
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
    public function destroy(){
        return to_route('index');
    }

}
