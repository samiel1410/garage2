<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CampuPostRequest;
use App\Campu;


class CampuController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $campus = Campu::all();
        return view('campus.index', compact('campus'));
    }

    public function show(Request $request, Campu $campu)
    {
        return view('campus.show', compact('campu'));
    }

    public function create()
    {
        return view('campus.create');
    }

    public function store(CampuPostRequest $request)
    {
        $data = $request->validated();
        $campu = Campu::create($data);
        return redirect()->route('campus.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Campu $campu)
    {
        return view('campus.edit', compact('campu'));
    }

    public function update(CampuPostRequest $request, Campu $campu)
    {
        $data = $request->validated();
        $campu->fill($data);
        $campu->save();
        return redirect()->route('campus.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Campu $campu)
    {
        $campu->delete();
        return redirect()->route('campus.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
