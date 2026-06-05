<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Vivin Mahat Putri',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quam harum ea ex magni eligendi cumque.
                Recusandae commodi dolorem suscipit reiciendis libero eum distinctio.'
            ],

            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Vivin Mahat Putri',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repudiandae accusamus dolores nemo.'
            ]
        ];
    }
}