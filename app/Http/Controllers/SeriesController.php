<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->get(key:'id');
        $series = [
            'punisher',
            'Lost',
            'grey\'s Anatomy'
        ];

        return view('listar-series', compact('series'));
    }
}
