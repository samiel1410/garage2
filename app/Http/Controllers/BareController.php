<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BarePostRequest;
use App\Bare;


class BareController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $bares = Bare::all();
        return view('bares.index', compact('bares'));
    }

    public function show(Request $request, Bare $bare)
    {
        return view('bares.show', compact('bare'));
    }

    public function create()
    {
        return view('bares.create');
    }

    public function store(BarePostRequest $request)
    {
        $data = $request->validated();
        $bare = Bare::create($data);
        return redirect()->route('bares.index')->with('status', 'Registro Creado Exitosamente...!');
    }

    public function edit(Request $request, Bare $bare)
    {
        return view('bares.edit', compact('bare'));
    }

    public function update(BarePostRequest $request, Bare $bare)
    {
        $data = $request->validated();
        $bare->fill($data);
        $bare->save();
        return redirect()->route('bares.index')->with('status', 'Registro Actualizado Exitosamente...!');
    }

    public function destroy(Request $request, Bare $bare)
    {
        $bare->delete();
        return redirect()->route('bares.index')->with('status', 'Registro Eliminado Exitosamente...!');
    }
}
