<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkersController extends Controller {

    public function index() {
        return \App\User::with('name')->paginate(10);
    }
}
