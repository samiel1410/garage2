<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\PreferenciaPostRequest;
use App\Http\Controllers\Controller;
use App\Preferencia;

class PreferenciaController extends Controller
{


    public function index()
    {
        return Preferencia::all();
    }

    public function show(Request $request, Preferencia $preferencia)
    {
        return $preferencia;
    }

    public function store(PreferenciaPostRequest $request)
    {
        $data = $request->validated();
        $preferencia = Preferencia::create($data);
        return $preferencia;
    }

    public function update(PreferenciaPostRequest $request, Preferencia $preferencia)
    {
        $data = $request->validated();
        $preferencia->fill($data);
        $preferencia->save();

        return $preferencia;
    }

    public function destroy(Request $request, Preferencia $preferencia)
    {
        $preferencia->delete();
        return $preferencia;
    }

}
