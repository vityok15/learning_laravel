<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //Вивожу з бази пости

    public function index()
    {
        $post = Post::where("title", "Title 1")->first();
        dump($post);
    }

    // Write posts in db

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

        // Dowloads in db posts;
        foreach ($post1 as $item) {
            Post::create($item);
        }
        dd("create");
    }
    
        //Method update
        public function update() {
            $post = Post::find(1);
            $post->update([
               'title' => '1111111' 
            ]);
        }
        // Method delete 
        // update migranion php artisan:fresh
        public function delete() {
            $post = Post::withTrashed()->find(2);
         // $post->restore(); extract deleted data
            $post->delete();
            dd('deete');
        }
}



