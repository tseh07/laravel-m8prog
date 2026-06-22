<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request, $city)
    {
        $uri = $request->getRequestUri();
        $method = $request->method();
        $userAgent = $request->userAgent();
        $ip = $request->ip();

        return "<p>City: {$city}</p>
                <p>URI: {$uri}</p>
                <p>HTTP method: {$method}</p>
                <p>User agent: {$userAgent}</p>
                <p>User IP: {$ip}</p>";
    }
}