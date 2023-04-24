<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post = new Post([
            'title' => 'Example post',
            'content' => 'Lorem ipsum dolor sit amet',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'slug'=>'example-post',
            'user_id'=>1??auth()->id(),
        ]);

        $image = UploadedFile::fake()->image('example.jpg');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $post->image = $imageName;

        $post->save();
    }
}
