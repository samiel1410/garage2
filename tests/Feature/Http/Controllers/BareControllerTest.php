<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Bare;
use App\User;

class BareControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_bare_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $bare = factory(Bare::class)->make();
        $data = $bare->attributesToArray();
        $response = $this->post(route('bares.store'), $data);
        $response->assertRedirect(route('bares.index'));
        $response->assertSessionHas('status', 'Bare created!');
    }

    /**
     * @test
     */
    public function it_updates_bare_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $bare = factory(Bare::class)->create();
        $data = factory(Bare::class)->make()->attributesToArray();
        $response = $this->put(route('bares.update', ['bare' => $bare]), $data);
        $response->assertRedirect(route('bares.index'));
        $response->assertSessionHas('status', 'Bare updated!');
    }

    /**
     * @test
     */
    public function it_destroys_bare_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $bare = factory(Bare::class)->create();
        $response = $this->delete(route('bares.destroy', ['bare' => $bare]));
        $response->assertRedirect(route('bares.index'));
        $response->assertSessionHas('status', 'Bare destroyed!');
    }
}
