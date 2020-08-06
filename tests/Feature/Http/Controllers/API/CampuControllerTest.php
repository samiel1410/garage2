<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Campu;
use App\User;
use Laravel\Passport\Passport;

class CampuControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_campu_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/campus']);
        $campu = factory(Campu::class)->make();
        $data = $campu->attributesToArray();
        $response = $this->json('POST','api/campus',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_campu_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/campus']);
        $campu = factory(Campu::class)->create();
        $data = factory(Campu::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/campus/'.$campu->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_campu_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/campus']);
        $campu = factory(Campu::class)->create();
        $response = $this->json('DELETE','api/campus/'.$campu->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $campu->refresh();
        $this->assertSoftDeleted('campus',['id' => $campu->id]);

    }
}
