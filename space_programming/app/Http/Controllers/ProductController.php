<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return '<a href="/product/1">Fluffy bone</a><br>'
             . '<a href="/product/2">Squeaky ball</a><br>'
             . '<a href="/product/3">Chew rope</a><br>';
    }

    public function show($id)
    {
        return "<p>This is product {$id}</p>
                <a href=\"/\">Back</a>";
    }
}