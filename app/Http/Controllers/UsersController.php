<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required|max:50',
            'email'=>'required|email|unique:users|max:25',
            'password'=>'required'
        ]);
        return;
    }
}
