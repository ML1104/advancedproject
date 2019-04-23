<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApiUsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return $users;
    }
}
