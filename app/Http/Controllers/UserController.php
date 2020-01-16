<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Users\CreateUsersProfileRequest;
use App\Http\Requests\Users\UpdateUsersProfileRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('userCount');
    }
    public function index()
    {
        $users = User::where('role', '=', "user")->paginate(5);
        return view('auth.users.index')->with('users', $users);
    }
    public function create()
    {
        return view('auth.users.create');
    }
    public function store(CreateUsersProfileRequest $request)
    {
        $auth = $request->auth;
        $imploded = implode(',', $auth);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "user",
            'auth' => $imploded,
        ]);
        Session()->flash('status', 'Success');
        return redirect()->route('users.index');
    }
    public function edit()
    {
        return view('auth.users.edit')->with('user', auth()->user());
    }
    public function update(UpdateUsersProfileRequest $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        Session()->flash('status', 'Success');
        return redirect()->route('users.index');
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->role = 'admin';
        $user->save();
        Session()->flash('status', 'Success');
        return redirect()->route('users.index');
    }
}
