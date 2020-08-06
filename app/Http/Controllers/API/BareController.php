<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\BarePostRequest;
use App\Http\Controllers\Controller;
use App\Bare;

class BareController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Bare::all();
    }

    public function show(Request $request, Bare $bare)
    {
        return $bare;
    }

    public function store(BarePostRequest $request)
    {
        $data = $request->validated();
        $bare = Bare::create($data);
        return $bare;
    }

    public function update(BarePostRequest $request, Bare $bare)
    {
        $data = $request->validated();
        $bare->fill($data);
        $bare->save();

        return $bare;
    }

    public function destroy(Request $request, Bare $bare)
    {
        $bare->delete();
        return $bare;
    }

}
