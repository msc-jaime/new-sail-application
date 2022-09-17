<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class VehiculoTest extends TestCase
{
    public $password_default_factory = '12345678';


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_vehiculo()
    {
        //$response = $this->post('/app/vehiculo');

        $user = User::factory()->create();

        var_dump($this->password_default_factory);
        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => $this->password_default_factory,
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);

        $response = $this->post(route('vehiculo.create'), ['placa'=>'IEF768', 'marca'=>'Renault', 'modelo'=>'1999', 'color'=>'magenta']);

        $response->assertStatus(201);
    }
}
