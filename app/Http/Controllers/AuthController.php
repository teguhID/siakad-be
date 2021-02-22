<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\OauthAccessToken;
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
        
        $input['password'] = Hash::make($input['password']);    

        if ($validator->fails()) {
            return response()->json([
                'status'  => 500,
                'message' => 'Internal Server Error',
                'error'   => $validator->errors(),
            ], 401);
        }

        else{
            unset($input['confirm_password']);
            $query = User::create($input);
            
            if ( !$query ){
                return response()->json([
                    'status'  => 500,
                    'message' => 'Error insert data'
                ], 500);
            }
            else{
                return response()->json([
                    'status'  => 200,
                    'message' => 'Success'
                ], 200);
            }
            
        }
    }

    public function login(Request $request)
    {
        $input     = $request->all();
        $validator = Validator::make($input, [
            'email'            => 'required|email',
            'password'         => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 500,
                'message' => 'Internal Server Error',
                'error'   => $validator->errors(),
            ], 500);
        }
        else{
            $query = User::where('email', '=', $input['email'])->first();
            if (@count($query) > 0) {

                if (Hash::check($input['password'], $query['password'])) {                  
                    return response()->json([
                        'status'  => 200,
                        'message' => 'Success',
                        'data'    => [
                            'email' => $query['email'],
                            'access_token' => $query->createToken('users')->accessToken
                        ],
                    ], 200);
                }
                else{
                    return response()->json([
                        'status'  => 500,
                        'message' => 'Wrong Password',
                    ], 500);
                }

            }
            else{
                return response()->json([
                    'status'  => 500,
                    'message' => 'Wrong Email',
                ], 500);
            }
        }
    }

    public function logout(Request $request) {
        $data = OauthAccessToken::all()->first();

        if ($data) {
            $query = $data->delete();
            if ($query) {
                return response()->json([
                    'status'  => 200,
                    'message' => 'Logout',
                ], 200);
            }
            return response()->json([
                'status'  => 500,
                'message' => 'Internal Server Error',
            ], 500);
        }
        else{
            return response()->json([
                'status'  => 501,
                'message' => 'Data Null',
            ], 501);
        }
    }
}
