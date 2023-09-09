<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApplicationRequest;

class ApplicationController extends Controller
{
    public function index()
    {
        return response()->json(Application::all());
    }

    public function show($id)
    {
        return response()->json(Application::find($id));
    }

    public function store(StoreApplicationRequest $request){
        Application::create($request->validated());
        return response()->json("Usuario creado");
    }

    public function update(StoreApplicationRequest $request, Application $Application)
    {
        $Application->update($request->validated());
        return $Application;
    }

    public function destroy(Application $Application){
        $Application->delete();
        return response()->json("Usuario eliminado");
    }
}
