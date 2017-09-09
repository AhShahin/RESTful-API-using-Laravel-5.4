<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use  ApiResponser;

    public function __construct()
    {
        // using auth middleware with api guard in auth.php
        //$this->middleware('auth:api');
    }
}
