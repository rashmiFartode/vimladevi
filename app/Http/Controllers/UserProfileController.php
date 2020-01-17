<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Users\CreateUsersProfileRequest;
use App\Http\Requests\Users\UpdateUsersProfileRequest;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{

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
