<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class QueryController extends Controller
{
    public function get()
    {
        $users = User::where('gender', 'f')
            ->get(['id', 'name', 'biography']);

        return view('users.index', compact('users'));
    }

    public function orderby()
    {
        $users = User::orderBy('id', 'DESC')
            ->take(10)
            ->get();

        return view('users.index', compact('users'));
    }
}
