<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use App\Models\User;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

         //validate credentials
         $validator = Validator::make($credentials, [
            'email' => 'required',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails())  return response()->json(['error' => $validator->messages()], 400);

        try 
        {
        
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                ], 400);
            }

            return $this->createNewToken($token);
        
        } 
        catch (JWTException $e) 
        {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

    }

    public function register(Request $request)
    {
        
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'landmark' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //Send failed response if request is not valid
        if ($validator->fails())  return response()->json(['error' => $validator->messages()], 400);

        // $user = User::create([
        //     'first_name' => $request->firstname,
        //     'last_name' => $request->lastname,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        //     'city' => $request->city,
        //     'landmark' => $request->landmark,
        //     'area' => $request->area,
        //     'password' => Hash::make($request->password),
        // ]);

        //return response()->json(compact('user'),201);
        return response()->json($request->all());
    }
}
