<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // Вивожу з бази пости

    public function index()
    {
        $post = Post::where("title", "Title 1")->first();
        dump($post);
    }

    // Записую пости в базу

    public function create()
    {

        $post1 = [
            [
                'title' => 'Перше повідомлення',
                'content' => 'Це текст першого повідомлення.',
                'image' => 'image1.jpg',
                'like' => 10,
                'is_published' => 1,
                'created_at' => '2024-08-11 17:17:46',
                'updated_at' => '2024-08-11 17:22:26',
                'deleted_at' => NULL
            ],
            [
                'title' => 'Друге повідомлення',
                'content' => 'Це текст другого повідомлення.',
                'image' => 'image2.jpg',
                'like' => 20,
                'is_published' => 1,
                'created_at' => '2024-08-12 10:30:15',
                'updated_at' => '2024-08-12 10:45:00',
                'deleted_at' => NULL
            ],
            [
                'title' => 'Третє повідомлення',
                'content' => 'Це текст третього повідомлення.',
                'image' => 'image3.jpg',
                'like' => 30,
                'is_published' => 1,
                'created_at' => '2024-08-13 12:00:00',
                'updated_at' => '2024-08-13 12:30:00',
                'deleted_at' => NULL
            ]
        ];

        foreach ($post1 as $item) {
            Post::create($item);
        }
        dd("create");


    }
}



