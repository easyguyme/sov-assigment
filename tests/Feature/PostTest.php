<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\UploadedFile;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;
class PostTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function an_authenticated_user_can_create_a_post()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        Storage::fake('public');

        $user = User::factory()->create();
        $this->actingAs($user);

        $image = UploadedFile::fake()->image('post.jpg');
        $response = $this->post('/posts', [
            'user_id' => $user->id,
            'title' => 'New post title',
            'content' => 'New post content',
            'excerpt' => 'New post excerpt',
            'image' => $image,

        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('posts', [
            'user_id' => $user->id,
            'title' => 'New post title',
            'content' => 'New post content',
            'excerpt' => 'New post excerpt',

        ]);

    }

    /** @test */
    public function an_unauthenticated_user_cannot_create_a_post()
    {
        $response = $this->post('/posts', [
            'user_id' => 1,
            'title' => 'New post title',
            'slug' => 'new-post-slug',
            'content' => 'New post content',
            'excerpt' => 'New post excerpt',
            'image' => 'new-post-image.jpg',
            'status' => 1,
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseMissing('posts', [
            'title' => 'New post title',
            'slug' => 'new-post-slug',
            'content' => 'New post content',
            'excerpt' => 'New post excerpt',
            'image' => 'new-post-image.jpg',
            'status' => 1,
        ]);
    }
    /** @test */
    public function an_authenticated_user_can_edit_their_own_post()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $post = Post::factory()->create(['user_id' => $user->id]);

        $title = 'Updated post title';
        $body = 'Updated post body';
        $excerpt = 'Updated post excerpt';
        $response = $this->put('/posts/' . $post->id, [
            'title' => $title,
            'content' => $body,
            'excerpt'=>$excerpt,
        ]);

        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => $title,
            'content' => $body,
            'excerpt'=>$excerpt,
        ]);
    }

    /** @test */
    public function an_authenticated_user_can_delete_their_own_post()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $post = Post::factory()->create(['user_id' => $user->id]);

        $response = $this->delete('posts/' . $post->id);


        $this->assertDatabaseMissing('posts', [
            'id' => $post->id,
        ]);
    }


}
