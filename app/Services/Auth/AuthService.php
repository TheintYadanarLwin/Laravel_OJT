<?php
namespace App\Services\Auth;
use App\Contracts\Dao\Auth\AuthDaoInterface;
use App\Contracts\Services\Auth\AuthServiceInterface;
class AuthService implements AuthServiceInterface
{
    private $authDao;

    public function __construct(AuthDaoInterface $authDao)
    {
        $this->authDao = $authDao;
    }

    /**
     * Register And Create User
     * @param mixed $request
     * @return mixed
     */
    public function register($request)
    {
        return $this->authDao->register($request);
    }
    /**
     * Update User Profile 
     * @param mixed $request
     * @return mixed
     */
    public function updateUser($request)
    {
        return $this->authDao->updateUser($request);
    }

    /**
     * Update Password
     * @param mixed $request
     * @return mixed
     */
    public function updatePassword($request)
    {
        return $this->authDao->updatePassword($request);
    }
}
