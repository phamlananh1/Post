<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list() {
        $users = Auth::all();
        return view('users.lists', compact('users'));
    }

}
