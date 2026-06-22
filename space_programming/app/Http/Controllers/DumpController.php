<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpController extends Controller
{
    public function dump(Request $request)
    {
        dump($request);

        return 'Dump method completed';
    }

    public function dump_die(Request $request)
    {
        dd($request);

        return 'Dump method completed';
    }
}