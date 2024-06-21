<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, UserService $userService)
    {
        return response()->json([
            'data' => [
                'user' => UserResource::make($userService->findById($id))
            ],
            'error' => ''
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function login(LoginRequest $request, UserService $userService)
    {
        $user = $userService->findByColumn('email',$request->email)[0];
        if($request->submit == 'client'){
            if(Hash::check($request->password, $user->password) && $user->type == 'client'){
                $token = $user->createToken($user->name);
                return response()->json([
                    'data' => [
                        'user' => UserResource::make($user),
                        'token' => $token->plainTextToken,
                        'message' => 'client Login Successfully!',
                    ],
                    'error' => ''
                ],200);
            }
            return response()->json([
                'data' => [],
                'error' => 'Invalid Email Or Password!'
            ],422);

        }elseif($request->submit == 'store'){
            if(Hash::check($request->password, $user->password) && $user->type == 'store'){
                $token = $user->createToken($user->name);
                return response()->json([
                    'data' => [
                        'user' => UserResource::make($user),
                        'token' => $token->plainTextToken,
                        'message' => 'client Login Successfully!',
                    ],
                    'error' => ''
                ],200);
            }
            return response()->json([
                'data' => [],
                'error' => 'Invalid Email Or Password!'
            ],422);
        }
    }

    public function logout(Request $request, UserService $userService)
    {
        $user = $userService->findById($request->user_id);
        $user->tokens()->delete();
        return response()->json([
            'data' => [
                'user' => UserResource::make($user),
                'message' => 'client Logout Successfully!',
            ],
            'error' => ''
        ],200);
    }

    public function register(UserRequest $request, UserService $userService)
    {
        $user = $userService->createUser([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password)
        ], $request->image);

        return response()->json([
            'data' => [
                'user' => UserResource::make($user),
                'message' => 'User Register Successfully!',
            ],
            'error' => ''
        ],200);
    }

    public function UpdateProfile($id, Request $request, UserService $userService)
    {
        if ($userService->updateUser($id,$request)) {
            $user = $userService->findById($id);
            return response()->json([
                'data' => [
                    'user' => UserResource::make($user),
                    'message' => 'User Updated Successfully!',
                ],
                'error' => ''
            ],200);
        }
        return response()->json([
            'data' => [],
            'error' => 'some thing went wrong!'
        ],422);
    }

    public function deleteAccount($id, UserService $userService)
    {
        $user = $userService->findById($id);
        if($user->id){
            $userService->delete($id);
            return response()->json([
                'data' => [
                    'message' => 'Account deleted successfully!'
                ],
                'error' => ''
            ],200);
        }

        return response()->json([
            'data' => [],
            'error' => "This user is not found!"
        ],422);
    }

}
