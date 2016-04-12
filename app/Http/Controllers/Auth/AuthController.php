<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index() {
        return view('auth.login');
    }
}
