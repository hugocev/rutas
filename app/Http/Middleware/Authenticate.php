<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use App\Models\User;

class Authenticate extends Middleware
{
   public function handle(Request $request, Closure $next)
    {

     $getHeaders = apache_request_headers ();
     $token = $getHeaders['Authorization'];
     $key = "hnuiklgefvauihntaerfviuhnesrvtb896IKJSHD/*-º<34NDR35";

     $decoded = JWT::decode($token, $key, array('HS256'));

    }
}
