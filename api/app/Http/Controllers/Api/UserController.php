<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index(){
        return UserResource::collection(User::all());
    }

    public function show(User $user){
        return new UserResource($user);
    }

    public function store(StoreUserRequest $request){
        User::create($request->validated());
        return response()->json("User Created");
    }
    
    public function update(StoreUserRequest $request, User $user){
        $user->update($request->validated());
        return response()->json("User Updated");
    }

    public function destroy(User $user){
        $user->delete();
        return response()->json("User Deleted");
    }
}
