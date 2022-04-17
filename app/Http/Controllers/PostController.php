<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    protected $posts = [
        ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Yehya', 'created_at' => '2020-04-17'],
        ['id' => 2, 'title' => 'Rails', 'posted_by' => 'Ramez', 'created_at' => '2020-04-17'],
        ['id' => 3, 'title' => 'Spring', 'posted_by' => 'Hassan', 'created_at' => '2020-04-17'],
    ];

    public function index()
    {   
        return view('posts.index', [
            'posts' => $this->posts,
            ]
        );
    }

    public function create()
    {
        return view('posts.create', [
            'posts' => $this->posts
            ]
        );
    } 

    public function store()
    {
        return "We are in store";
    }

    public function show($postId)
    {   
        //return $this->posts[$postId-1];
        return view('posts.show', ['post' => $this->posts[$postId - 1]]);
    }

    public function edit($postId)
    {
        //return $this->posts[$postId-1];
        return view('posts.edit', ['post' => $this->posts[$postId - 1]]);
    }

    public function update($postId)
    {
        return $postId;
    }
}
