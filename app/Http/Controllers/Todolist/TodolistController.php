<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $todolists = Todolist::where([['status', '=', 0]])->get();
        return view('todolist.todolist')->with(['todolists' => $todolists]);
    }
}
