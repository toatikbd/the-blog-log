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
        // return redirect()->route('user.index')->with('success', $user->name."User creatd successfully");
        return $this->redirectUser($user->name." created Successfully");
    }

    public function edit(User $user)
    {
        return view('backpanel.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return $this->redirectUser($user->name." updated Successfully");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->redirectUser("User deleted Successfully");
    }

    protected function redirectUser(String $message)
    {
        return redirect()
            ->route('user.index')
            ->with('success', $message);
    }
}
