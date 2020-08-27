<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $users = User::count();
        return view('manage.index', compact('users'));
    }
}
