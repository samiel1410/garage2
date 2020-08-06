<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarPostRequest;
use App\Car;


class CarController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show(Request $request, Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(CarPostRequest $request)
    {
        $data = $request->validated();
        $car = Car::create($data);
        return redirect()->route('cars.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(CarPostRequest $request, Car $car)
    {
        $data = $request->validated();
        $car->fill($data);
        $car->save();
        return redirect()->route('cars.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
