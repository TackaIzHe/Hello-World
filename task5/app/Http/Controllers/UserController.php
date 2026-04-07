<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show1()
    {
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ], 
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];
        return view('user.show1', ['links' => $links]);
    }

    public function show2()
    {
        $employees = [
        [
        'name' => 'user1',
        'surname' => 'surname1',
        'salary' => 1000,
        ],
        [
        'name' => 'user2',
        'surname' => 'surname2',
        'salary' => 2000,
        ],
        [
        'name' => 'user3',
        'surname' => 'surname3',
        'salary' => 3000,
        ],
        [
        'name' => 'user4',
        'surname' => 'surname4',
        'salary' => 4000,
        ],
        [
        'name' => 'user5',
        'surname' => 'surname5',
        'salary' => 5000,
        ],
        ];
        return view('user.show2', ['users' => $employees]);
    }

    public function show3()
    {
        $users = [
        [
        'name' => 'user1',
        'surname' => 'surname1',
        'banned' => true,
        ],
        [
        'name' => 'user2',
        'surname' => 'surname2',
        'banned' => false,
        ],
        [
        'name' => 'user3',
        'surname' => 'surname3',
        'banned' => true,
        ],
        [
        'name' => 'user4',
        'surname' => 'surname4',
        'banned' => false,
        ],
        [
        'name' => 'user5',
        'surname' => 'surname5',
        'banned' => false,
        ],
        ];


        $strings = ['asd', 'qwe', 'qwrasd', 'sdfwe', 'sfdgewf'];
        $day = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
        $cur_day = 5;
        return view('user.show3', ['users' => $users, 'strings' => $strings, 'day' => $day, 'cur_day' => $cur_day]);
    }
}
