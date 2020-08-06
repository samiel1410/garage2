<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Car;
use App\User;
use Laravel\Passport\Passport;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_car_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/cars']);
        $car = factory(Car::class)->make();
        $data = $car->attributesToArray();
        $response = $this->json('POST','api/cars',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_car_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/cars']);
        $car = factory(Car::class)->create();
        $data = factory(Car::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/cars/'.$car->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_car_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/cars']);
        $car = factory(Car::class)->create();
        $response = $this->json('DELETE','api/cars/'.$car->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $car->refresh();
        $this->assertSoftDeleted('cars',['id' => $car->id]);

    }
}
