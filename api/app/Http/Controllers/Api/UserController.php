<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use HttpResponses;
    
    public function index()
    {
        return UserResource::collection(User::all());
    }
    
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
    
}
