<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Alex',
                'age' => '30'
            ],
            [
                'name' => 'Piyumi',
                'age' => '32'
            ],
            [
                'name' => 'John',
                'age' => '16'
            ],
        ];

        return view(
            'addUser',
            ['users' => $users]
        );
    }
}
