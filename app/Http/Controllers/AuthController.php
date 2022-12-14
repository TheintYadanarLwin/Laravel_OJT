<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Session;
use App\Contracts\Services\Auth\AuthServiceInterface;

class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }
   
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Login  
     * @param \App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("posts")
                ->withSuccess('Welcome Back!You have Signed in.');
        }
        return redirect("login")->with('error', 'Sorry! Login details are not valid');
    }

    /**
     * Register route
     * @return \Illuminate\Http\Response
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Register and create user   
     * @param \App\Http\Requests\UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function register(UserRequest $request)
    {
        $user = $this->authService->register($request);

        Auth::login($user);
        return redirect("posts")->with('success', 'Welcome ! You have signed-in Successfully ');
    }

    /**
     * Logout
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function signOut()
    {
        Auth::logout();
        return redirect('home');
    }

    /**
     * User Update view
    * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('auth.edit');
    }
    /**
     * Update User
     * @param \App\Http\Requests\UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(UserRequest $request)
    {
        $user = $this->authService->updateUser($request);

        return redirect()->route('posts.index', compact('user'))->with('success', 'User Profile Has Been updated successfully');
    }

    /**
     * Change Password
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('auth.change-password');
    }

    /**
     * Update Password
     * @param mixed $request
     * @return mixed
     */
    public function updatePassword(PasswordRequest $request)
    {
        $user = $this->authService->updatePassword($request);
        return redirect()->route('posts.index',compact('user'))->with('success', 'Password has been changed successfully');
    }
}
