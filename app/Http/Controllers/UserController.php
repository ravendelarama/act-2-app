<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 2,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 3,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 4,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 5,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
        ];

        return response([
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response([
            'success' => 'User created!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 2,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 3,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 4,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
            [
                'id' => 5,
                'name' => 'Raven Dela Rama',
                'email' => 'official.ravendelarama@gmail.com',
            ],
        ];

        $user = $users[$id - 1];

        return response([
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response([
            'success' => 'User updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response([
            'success' => 'User deleted!'
        ]);
    }
}
