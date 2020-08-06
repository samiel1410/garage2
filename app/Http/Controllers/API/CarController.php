<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\CarPostRequest;
use App\Http\Controllers\Controller;
use App\Car;

class CarController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Car::all();
    }

    public function show(Request $request, Car $car)
    {
        return $car;
    }

    public function store(CarPostRequest $request)
    {
        $data = $request->validated();
        $car = Car::create($data);
        return $car;
    }

    public function update(CarPostRequest $request, Car $car)
    {
        $data = $request->validated();
        $car->fill($data);
        $car->save();

        return $car;
    }

    public function destroy(Request $request, Car $car)
    {
        $car->delete();
        return $car;
    }

}
