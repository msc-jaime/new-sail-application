<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Vehiculo;

class VehiculoTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_index_vehiculo(){
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('vehiculo.index'));

        $response->assertStatus(200);
    }

    public function test_view_create_vehiculo(){
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('vehiculo.create'));

        $response->assertStatus(200);
    }

    public function test_view_edit_vehiculo(){

        $test_vehiculo = [
            'placa' => 'SKN456', 
            'marca' => 'Mercedez', 
            'modelo' => '2005', 
            'color' => 'Rojo'
        ];
        
        $user = User::factory()->create();

        $vehiculo = $this->actingAs($user)->post(route('vehiculo.store'), $test_vehiculo);

        $response = $this->actingAs($user)->get(route('vehiculo.edit', 1));

        $response->assertStatus(200);
    }

    public function test_create_vehiculo(){
        $user = User::factory()->create();

        $test_vehiculo = [
            'placa' => 'SKN456', 
            'marca' => 'Mercedez', 
            'modelo' => '2005', 
            'color' => 'Rojo'
        ];
        
        $response = $this->actingAs($user)->post(route('vehiculo.store'), $test_vehiculo);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('vehiculo.index'));
    }

    public function test_read_vehiculo(){
        $user = User::factory()->create();

        $test_vehiculo = [
            'placa' => 'SKN456', 
            'marca' => 'Mercedez', 
            'modelo' => '2005', 
            'color' => 'Rojo'
        ];
        
        $response = $this->actingAs($user)->post(route('vehiculo.store'), $test_vehiculo);

        $test_vehiculo_read = Vehiculo::all()->first();
        
        $this->assertEquals($test_vehiculo['placa'], $test_vehiculo_read['placa']);
        $this->assertEquals($test_vehiculo['marca'], $test_vehiculo_read['marca']);
        $this->assertEquals($test_vehiculo['modelo'], $test_vehiculo_read['modelo']);
        $this->assertEquals($test_vehiculo['color'], $test_vehiculo_read['color']);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('vehiculo.index'));
    }

    public function test_update_vehiculo(){
        $user = User::factory()->create();
        
        $test_vehiculo = [
            'placa'=>'IEF768', 
            'marca'=>'Renault', 
            'modelo'=>'1999', 
            'color'=>'magenta',
        ];
        
        $response = $this->actingAs($user)->post(route('vehiculo.store'), $test_vehiculo);
        
        $vehiculo = Vehiculo::all()->first();

        $test_vehiculo_update = [
            'placa' => 'ABC333', 
            'marca' => 'Chevrolet', 
            'modelo' => '2010', 
            'color' => 'Azul metalizado'
        ];

        $response = $this->actingAs($user)->put(route('vehiculo.update', [ "vehiculo" => $vehiculo->id]), $test_vehiculo_update);
        
        $response->assertSessionHasNoErrors();

        $ddbb_post = Vehiculo::all()->first();
        $this->assertEquals($ddbb_post['placa'], $test_vehiculo_update['placa']);
        $this->assertEquals($ddbb_post['marca'], $test_vehiculo_update['marca']);
        $this->assertEquals($ddbb_post['modelo'], $test_vehiculo_update['modelo']);
        $this->assertEquals($ddbb_post['color'], $test_vehiculo_update['color']);
    }

    public function test_delete_vehiculo(){
        $user = User::factory()->create();

        $test_vehiculo = [
            'placa' => 'SKN456', 
            'marca' => 'Mercedez', 
            'modelo' => '2005', 
            'color' => 'Rojo'
        ];

        $response = $this->actingAs($user)->post(route('vehiculo.store'), $test_vehiculo);

        $vehiculo = Vehiculo::all()->first();

        $response = $this->actingAs($user)->delete(route('vehiculo.delete', $vehiculo));

        $ddbb_post = Vehiculo::find($vehiculo->id);

        $this->assertNull($ddbb_post);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('vehiculo.index'));
    }
}
