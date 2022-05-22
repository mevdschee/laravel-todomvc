<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function list(string $state, int $id = 0)
    {
        return view('list', ['todos' => []]);
    }
}
