<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    function checkarray2($names) {
        // $names = ['name1','name2'];
        $names = [];
        // return $names;
        return view('test', ['names' => $names]);
    }
}
