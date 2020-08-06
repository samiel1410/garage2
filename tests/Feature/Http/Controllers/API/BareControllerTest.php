<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Bare;
use App\User;
use Laravel\Passport\Passport;

class BareControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_bare_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/bares']);
        $bare = factory(Bare::class)->make();
        $data = $bare->attributesToArray();
        $response = $this->json('POST','api/bares',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_bare_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/bares']);
        $bare = factory(Bare::class)->create();
        $data = factory(Bare::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/bares/'.$bare->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_bare_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/bares']);
        $bare = factory(Bare::class)->create();
        $response = $this->json('DELETE','api/bares/'.$bare->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $bare->refresh();
        $this->assertSoftDeleted('bares',['id' => $bare->id]);

    }
}
