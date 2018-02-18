<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        Redis::set('name', 'Taylor');

        return Redis::get('name');
    }
}
