<?php

namespace App\Http\Controllers\API\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    # typical functions of an api controller (index, show, store, update, destroy)

    public function index()
    {
        return new UserCollection(User::all());
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function store(StoreUserRequest $request){
        User::create($request->validated());
        return response()->json("Usuario creado");
    }

    public function update(StoreUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return $user;
    }

    public function destroy(User $user){
        $user->delete();
        return response()->json("Usuario eliminado");
    }


}
