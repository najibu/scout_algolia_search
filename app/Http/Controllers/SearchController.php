<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $users = User::search($request->get('search'))->get();
        } else {
            $users = User::get();
        }

        return view('index', compact('users'));
    }
}
