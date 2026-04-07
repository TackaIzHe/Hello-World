<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return "user show";
    }

    public function all()
    {
        return "user all";
    }
    public function name($name)
    {
        return "user name ".$name;
    }
    public function city($name)
    {
        $users = [
'user1' => 'city1',
'user2' => 'city2',
'user3' => 'city3',
'user4' => 'city4',
'user5' => 'city5',
];
        return $users[$name];
    }
}
