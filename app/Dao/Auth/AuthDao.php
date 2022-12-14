<?php

namespace App\Dao\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Contracts\Dao\Auth\AuthDaoInterface;

class AuthDao implements AuthDaoInterface
{
    /**
     * Register To Create user
     * @param mixed $request
     * @return mixed
     */
    public function register($request)
    {
        $user = $request->all();
        return User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password'])
        ]);
    }

    /**
     * Logout User
     * @return void
     */
    public function signOut()
    {
        Session::flush();
        return Auth::logout();
    }

    /**
     * Update User
     * @param mixed $request
     * @return void
     */
    public function updateUser($request)
    {
        $user = User::findOrFail(auth()->id());
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return $user;
    }

    /**
     * Update Password
     * @param mixed $request
     * @return mixed
     */
    public function updatePassword($request)
    {  
        #Update the new Password
        return User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
    }
}
