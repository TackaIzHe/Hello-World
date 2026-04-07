<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name, $surname)
    {
        return view('user.post', ['name' => $name, 'surname' => $surname]);
    }

    public function all()
    {
        return view('user.all');
    }

    public function func1()
    {
        return view('user.func1');
    }

    public function func2()
    {
        return view('user.func2');
    }
}
