<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Campu;
use App\User;

class CampuControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_campu_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $campu = factory(Campu::class)->make();
        $data = $campu->attributesToArray();
        $response = $this->post(route('campus.store'), $data);
        $response->assertRedirect(route('campus.index'));
        $response->assertSessionHas('status', 'Campu created!');
    }

    /**
     * @test
     */
    public function it_updates_campu_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $campu = factory(Campu::class)->create();
        $data = factory(Campu::class)->make()->attributesToArray();
        $response = $this->put(route('campus.update', ['campu' => $campu]), $data);
        $response->assertRedirect(route('campus.index'));
        $response->assertSessionHas('status', 'Campu updated!');
    }

    /**
     * @test
     */
    public function it_destroys_campu_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $campu = factory(Campu::class)->create();
        $response = $this->delete(route('campus.destroy', ['campu' => $campu]));
        $response->assertRedirect(route('campus.index'));
        $response->assertSessionHas('status', 'Campu destroyed!');
    }
}
