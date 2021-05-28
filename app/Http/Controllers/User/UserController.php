<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('backpanel.users.index', compact('users'));
    }
    public function create(){
        return view('backpanel.users.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)
        // ]);
        return redirect()->route('user.index')->with('success', $user->name."User creatd successfully");
    }
}
