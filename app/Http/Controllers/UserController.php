<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function login(Request $request) {

  	 $data = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
      return response([
          'message' => ['These credentials do not match our records.']
      ], 404);
    }

    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
      'user' => $user,
      'token' => $token
    ];

    return response($response, 201);

  }

  public function store(Request $request) {

    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $user = User::create([
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'password' => $request->get('password'),
    ]);

    $user->save();

    return response('User created', 201);

  }

}
