<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Post 1',
                'body' => 'This is the body',
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'body' => 'This is the body',
            ],
            [
                'id' => 3,
                'title' => 'Post 3',
                'body' => 'This is the body',
            ],
            [
                'id' => 4,
                'title' => 'Post 4',
                'body' => 'This is the body',
            ],
            [
                'id' => 5,
                'title' => 'Post 5',
                'body' => 'This is the body',
            ],
        ];

        return response([
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response([
            'success' => 'Post uploaded!'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response([
            'success' => 'Post uploaded!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Post 1',
                'body' => 'This is the body',
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'body' => 'This is the body',
            ],
            [
                'id' => 3,
                'title' => 'Post 3',
                'body' => 'This is the body',
            ],
            [
                'id' => 4,
                'title' => 'Post 4',
                'body' => 'This is the body',
            ],
            [
                'id' => 5,
                'title' => 'Post 5',
                'body' => 'This is the body',
            ],
        ];

        $post = $posts[$id - 1];

        return response([
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response([
            'success' => 'Post updated!'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response([
            'success' => 'Post updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response([
            'success' => 'Post deleted!'
        ]);
    }
}
