<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function register(Request $request) {
    //     $fields = $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string|unique:users,email',
    //         'password' => 'required|string|confirmed'
    //     ]);

    //     $user = User::create([
    //         'name' => $fields['name'],
    //         'email' => $fields['email'],
    //         'password' => bcrypt($fields['password'])
    //     ]);

    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    // public function login(Request $request) {
    //     $fields = $request->validate([
    //         'email' => 'required|string',
    //         'password' => 'required|string'
    //     ]);

    //     // Check email
    //     $user = User::where('email', $fields['email'])->first();

    //     // Check password
    //     if(!$user || !Hash::check($fields['password'], $user->password)) {
    //         return response([
    //             'message' => 'Bad creds'
    //         ], 401);
    //     }

    //     $token = $user->createToken('myapptoken')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ];

    //     return response($response, 201);
    // }

    // public function logout(Request $request) {
    //     auth()->user()->tokens()->delete();

    //     return [
    //         'message' => 'Logged out'
    //     ];
    // }

    // public function create(Request $request, Account $account){
    //     // Gate::authorize('create', $account);
    //     dd($user = Auth::user());
    //     $account = Account::create($request->all());
    //     return response()->json($account);
    // }
    // public function create(Request $request)
    // {
    //     $data =  $request->validated();
    //     $account = Account::create($data);
    //     return $this->sendResponse($account,'Account Created Successfully!',201);
    // }

    // public function update(Request $request, $id)
    // {
    //     // $account = Account::find($id);
    //     // Gate::authorize('update', $account);
    //     //     if(is_null($account)) {
    //     //         return response()->json(['message' => 'Account Not Found'], 404);
    //     //     }
    //         $account->update($request->all());
    //         return response()->json($account);
    // }



    // //delete acc
    // public function delete (Request $request, $id)
    // {
    //     // $account = Account::find($id);
    //     // Gate::authorize('delete', $account);
    //     // if(is_null($account)) {
    //     //     return response()->json(['message' => 'Account Not Found'], 404);
    //     // }
    //     $account->delete();
    //     return response()->json(['message' => 'Success']);

    // }
}
