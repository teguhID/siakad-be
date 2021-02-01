<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $input     = $request->all();
        $validator = Validator::make($input, [
            'email'            => 'required|email',
            'password'         => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 500,
                'message' => 'Bad Request',
                'error'   => $validator->errors(),
            ], 401);
        }

        else{
            unset($input['confirm_password']);
            $input['password'] = Hash::make($input['password']);
            
            $query = User::create($input);

            $response['email'] = $query->email;
            $response['token'] = $query->createToken('users')->accessToken;

            return response()->json([
                'status'  => 200,
                'message' => 'Success',
                'data'    => $response,
            ], 200);
        }
    }
}
