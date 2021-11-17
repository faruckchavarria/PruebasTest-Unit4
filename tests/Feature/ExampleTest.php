<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_delete()
    {
        $response = $this->delete('/api/cliente/2');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor Eliminado exitosamente',
            ]);
    }
    public function test_update()
    {
        $response = $this->put('/api/cliente/2', ['nombres' => 'anier', 'apellidos' => 'Reyes']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor actualizado exitosamente',
            ]);
    }
    public function test_store()
    {
        $response = $this->post('/api/cliente', ['nombres' => 'poxs', 'apellidos' => 'Antonio']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Proveedor guardado exitosamente',
            ]);
    }
    public function test_index()
    {
        $response = $this->get('/api/cliente');

        $response
            ->assertStatus(200)
            ->assertJson([]);
    }
}
