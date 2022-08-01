<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index()
    {
        Redis::set('name', 'Alex');
        return Redis::get('name');
    }
}
