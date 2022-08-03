<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class NameController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function get()
    {
        return view('name', ['name' => Redis::get('name')]);
    }

    public function set(Request $request)
    {
        Redis::set('name', $request->name);
        return redirect('/name');
    }
}
