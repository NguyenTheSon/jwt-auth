<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller {

    public function login(Request $request) {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        //dd($credentials);
        try {
            // attempt to verify the credentials and create a token for the user
            /* @var $token type */
            if (!$token = JWTAuth::attempt($credentials)) {
                //dd($token);//flase
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $ex) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function show() {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());
        }

        return response()->json(compact('user'));
    }

    public function index() {
        return User::all();
    }

    public function getToken() {
        $token = JWTAuth::getToken();
        if(! $token)
        {
            return response()->json(['error' => 'token_invalid'], 101);
        }
        try{
            $refreshedToken = JWTAuth::refresh($token);
        } catch (Tymon\JWTAuth\Exceptions\JWTException $ex) {
            return response()->json(['error' => 'Somthing went wrong'], 102);
        }
        return response()->json(compact('refreshedToken'));
    }
    public function destroy()
    {
        
    }

}
