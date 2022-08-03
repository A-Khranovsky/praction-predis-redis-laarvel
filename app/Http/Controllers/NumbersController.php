<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class NumbersController extends Controller
{
    public function set(Request $request)
    {
        Redis::mset(
            'first',
            $request->first_number,
            'second',
            $request->second_number
        );
        return redirect()->route('numbers.get');
    }

    public function get()
    {
        return view('numbers', ['numbers' => Redis::mget('first', 'second')]);
    }

    public function increment()
    {
        Redis::transaction(function ($redis) {
            $redis->incr('first');
            $redis->incr('second');
        });
        return redirect()->route('numbers.get');
    }

    public function pipe()
    {
        Redis::pipeline(function ($pipe) {
            for ($i = 0; $i < 20; $i++) {
                $pipe->hSet('myHash', $i, $i);
            }
        });
        return view('numbers', ['array' => Redis::hGetAll('myHash')]);
    }
}
