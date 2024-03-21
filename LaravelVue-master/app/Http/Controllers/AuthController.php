<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255'],
            'password' => ['required','string', 'password'],
            // 'cpassword' => ['required'|'same:password'],
        ]);
        // if ($validator->fails()) {
        //     $response = [
        //         'success' => false,
        //         'message' => $validator->errors()->first(),
        //     ];
        //     return response()->json($response,400);
        // }
        $requestAll = $request->all();
        $requestAll['password'] = bcrypt($requestAll['password']);
        $user = User::create($request->all());
        $token = $user->createToken('MyApp')->plainTextToken; 

        return response()->json([
            'user' => $requestAll,
            'token' => $token,
        ]);
    }
public function login(Request $request)
{
    if(Auth::attempt(['email' =>$request->email , 'password' =>$request->password ])) {
        $user = $request->user();
        $token = $user->createToken('login')->plainTextToken;
        return response()->json([
            'user'=> $user,
            'token'=> $token,
            'message' => 'Login Successfull'
        ]);
    }
    else{
        return response()->json([
            'message'=> 'your email or password is wrong'
        ]);
    }
}
}
