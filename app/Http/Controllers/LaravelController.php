<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function show(Request $request)
    {
        return $request->fullUrl();
    }
    public function store(Request $request)
    {
        return $request->getContent();
    }
}
