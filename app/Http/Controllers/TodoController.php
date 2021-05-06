<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TodoController extends Controller
{
    function store(Request $request){


        return $request->all();

       $todo = new \App\Todo();
        $todo->todo = $request->todo;
        $todo->save();

    }
}
