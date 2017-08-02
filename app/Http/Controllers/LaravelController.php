<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function show(Request $request)
    {
        $url = $request->fullUrl();
        return view('laravel', ['url' => $url]);
    }
    public function store(Request $request)
    {
        return $request->getContent();
    }
}
