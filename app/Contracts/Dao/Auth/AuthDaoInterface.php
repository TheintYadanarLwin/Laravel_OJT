<?php

namespace App\Contracts\Dao\Auth;

interface AuthDaoInterface
{
    /**
     * Register and create user
     * @param mixed $request
     * @return mixed
     */
    public function register($request);

    /**
     * Update User Profile
     * @param mixed $request
     * @return mixed
     */
    public function updateUser($request);

    /**
     * Update Password
     * @param mixed $request
     * @return mixed
     */
    public function updatePassword($request);
}
