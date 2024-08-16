<?php 

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a specific post from the database
    public function index()
    {
        // Retrieve the first post with the title 'Title 1'
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    // Store new posts in the database
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
                'deleted_at' => null,
            ],
            [
                'title' => 'Друге повідомлення',
                'content' => 'Це текст другого повідомлення.',
                'image' => 'image2.jpg',
                'like' => 20,
                'is_published' => 1,
                'created_at' => '2024-08-12 10:30:15',
                'updated_at' => '2024-08-12 10:45:00',
                'deleted_at' => null,
            ],
            [
                'title' => 'Третє повідомлення',
                'content' => 'Це текст третього повідомлення.',
                'image' => 'image3.jpg',
                'like' => 30,
                'is_published' => 1,
                'created_at' => '2024-08-13 12:00:00',
                'updated_at' => '2024-08-13 12:30:00',
                'deleted_at' => null,
            ],
        ];

        // Insert posts into the database
        foreach ($post1 as $item) {
            Post::create($item);
        }

        dd('Posts created successfully');
    }

    // Update a specific post
    public function update()
    {
        // Find the post with ID 1
        $post = Post::find(1);

        if ($post) {
            $post->update([
                'title' => '1111111',
            ]);

            dd('Post updated successfully');
        } else {
            dd('Post not found');
        }
    }

    // Delete or restore a specific post
    public function delete()
    {
        // Find the post with ID 2, including soft-deleted ones
        $post = Post::withTrashed()->find(2);

        if ($post) {
            if ($post->trashed()) {
                $post->restore(); // Restore the post if it was soft-deleted
                dd('Post restored successfully');
            } else {
                $post->delete(); // Soft delete the post
                dd('Post deleted successfully');
            }
        } else {
            dd('Post not found');
        }
    }
}
