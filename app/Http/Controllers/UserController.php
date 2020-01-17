<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Users\CreateUsersProfileRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('auth.users.create')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('auth.users.create')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->only(['user', 'email', 'auth']);
        $auth = $data['auth'];
        $imploded = implode(',', $auth);
        $data['auth'] = $imploded;
        //storing attribute
        $user->update($data);
        //flashing session
        session()->flash('status', 'Successfull');
        //redirect user
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('status', 'Successfully');
        return redirect()->route('users.index');
    }
}
