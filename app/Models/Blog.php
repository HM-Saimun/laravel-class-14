<?php

namespace App\Models;

class Blog
{
    static function all(){
        return [
            [
                'id' => 1,
                'title' => 'My first blog 0001',
                'body' => 'This is my first blog post'
            ],
            [
                'id' => 2,
                'title' => 'My second blog',
                'body' => 'This is my second blog post'
            ],
            [
                'id' => 3,
                'title' => 'My thired blog',
                'body' => 'This is my third blog post'
            ]
        ];
    }
}

Blog::all();