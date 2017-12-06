<?php

namespace App\Http\Controllers;

use App\User;
use Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        //return $users;
        return view('users.index', compact("users"));
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return view('users.show', (compact('user')));
    }

    public function create() {
        return view('users.create');
    }

    public function store(){
        $email = Request::get('emailaddress');
        return $email;
    }

}
