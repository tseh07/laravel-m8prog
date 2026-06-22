<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return '<a href="' . route('products.show', ['id' => 1]) . '">Fluffy bone</a><br>'
             . '<a href="' . route('products.show', ['id' => 2]) . '">Squeaky ball</a><br>'
             . '<a href="' . route('products.show', ['id' => 3]) . '">Chew rope</a><br>';
    }

    public function show($id)
    {
        return "<p>This is product {$id}</p>
                <a href=\"" . route('products.index') . "\">Back</a>";
    }
}

use App\Http\Controllers\DumpController;

Route::get('/dump', [DumpController::class, 'dump']);
Route::get('/dump-die', [DumpController::class, 'dump_die']);

use App\Http\Controllers\HotelController;

Route::get('/hotels/{city}', [HotelController::class, 'index']);