<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function checkarray() {
        // $names = ['name1','name2'];
        $names = [];
        return view('test', ['names' => $names]);
    }

    function checkarray22($names) {
        // $names = ['name1','name2'];
        $names = [];
        // dd($names);
        return view('test', ['names' => $names]);
    }



}


