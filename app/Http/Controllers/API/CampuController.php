<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\CampuPostRequest;
use App\Http\Controllers\Controller;
use App\Campu;

class CampuController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Campu::all();
    }

    public function show(Request $request, Campu $campu)
    {
        return $campu;
    }

    public function store(CampuPostRequest $request)
    {
        $data = $request->validated();
        $campu = Campu::create($data);
        return $campu;
    }

    public function update(CampuPostRequest $request, Campu $campu)
    {
        $data = $request->validated();
        $campu->fill($data);
        $campu->save();

        return $campu;
    }

    public function destroy(Request $request, Campu $campu)
    {
        $campu->delete();
        return $campu;
    }

}
