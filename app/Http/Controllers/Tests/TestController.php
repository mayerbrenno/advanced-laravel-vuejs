<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function parameters($a, $b, $c)
    {
        return view('test.testParameters', compact('a', 'b', 'c'));
    }

    public function noParam()
    {
        $a = 100;
        $b = 'yu-gi-oh';
        $c = true;
        return view('test.testParameters', compact('a', 'b', 'c'));
    }
}
