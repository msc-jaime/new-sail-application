<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public $password_default_factory = '12345678';

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_login_form()
    {
        $response = $this->get('login');

        $response->assertStatus(200);
    }

    public function test_show_confirm_form(){
        $response = $this->get(route('password.confirm'));

        $response->assertStatus(302);
    }

    public function test_show_registration_form(){
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }

    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = User::factory()->make();
        
        $response = $this->actingAs($user)->get(route('login'));

        $response->assertRedirect(route('dashboard'));
    }

    public function test_user_can_login_with_correct_credentials()
    {

        $user = User::factory()->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => $this->password_default_factory,
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_incorrect_password()
    {

        $user = User::factory()->create();

        $response = $this->from(route('login'))->post(route('login'), [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);
        
        $response->assertRedirect(route('login'));
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    public function test_remember_me_functionality()
    {
        

        $user = User::factory()->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => $this->password_default_factory,
            'remember' => 'on',
        ]);
        
        $response->assertRedirect(route('dashboard'));
        // cookie assertion goes here
        $this->assertAuthenticatedAs($user);
    }
    
}
