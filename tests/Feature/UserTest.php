<?php

namespace Tests\Feature;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    private $test_email = 'johndoe@example.com';
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    public function a_user_can_log_in_with_valid_credentials()
    {

        $user = User::where('email',$this->test_email)->first();
        if(!$user){
            $user = User::factory()->create([
                'email' => $this->test_email,
                'password' => bcrypt('secret'),
            ]);
        }

        $response = $this->post('/login', [
            'email' => $this->test_email,
            'password' => 'secret',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function a_user_cannot_log_in_with_invalid_credentials()
    {

        $response = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /** @test */
    public function a_user_is_redirected_to_the_intended_page_after_logging_in()
    {

        $user = User::where('email',$this->test_email)->first();
        if(!$user){
            $user = User::factory()->create([
                'email' => $this->test_email,
                'password' => bcrypt('secret'),
            ]);
        }

        $response = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'secret',
            'intended_url' => '/dashboard',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function a_user_cannot_access_protected_pages_without_being_logged_in()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
        $this->assertGuest();
    }

    /** @test */
    public function a_user_can_register_with_valid_credentials()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'johndoe2@example.com',
            'password' => 'secret',
            'password_confirmation' => 'secret',
            'agreement'=>1
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'johndoe2@example.com',
        ]);
    }


    /** @test */
    public function a_user_cannot_request_a_password_reset_email_with_an_invalid_email_address()
    {
        $response = $this->post('/forgot-password', [
            'email' => 'invalid-email',
        ]);

        $response->assertSessionHasErrors('email');
    }






}
