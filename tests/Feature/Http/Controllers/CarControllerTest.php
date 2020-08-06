<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Car;
use App\User;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_car_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $car = factory(Car::class)->make();
        $data = $car->attributesToArray();
        $response = $this->post(route('cars.store'), $data);
        $response->assertRedirect(route('cars.index'));
        $response->assertSessionHas('status', 'Car created!');
    }

    /**
     * @test
     */
    public function it_updates_car_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $car = factory(Car::class)->create();
        $data = factory(Car::class)->make()->attributesToArray();
        $response = $this->put(route('cars.update', ['car' => $car]), $data);
        $response->assertRedirect(route('cars.index'));
        $response->assertSessionHas('status', 'Car updated!');
    }

    /**
     * @test
     */
    public function it_destroys_car_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $car = factory(Car::class)->create();
        $response = $this->delete(route('cars.destroy', ['car' => $car]));
        $response->assertRedirect(route('cars.index'));
        $response->assertSessionHas('status', 'Car destroyed!');
    }
}
