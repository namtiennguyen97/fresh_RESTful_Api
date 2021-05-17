<?php


namespace App\Http\Services\ServiceImplement;


use App\Http\Repositories\RepositoryEloquentImplement\UserBaseEloquentImplement;

class UserServiceImpl implements \App\Http\Services\UserService
{
    protected $userRepositoryImpl;

    public function __construct(UserBaseEloquentImplement $userBaseEloquentImplement)
    {
        $this->userRepositoryImpl = $userBaseEloquentImplement;
    }

    public function index()
    {
        return $this->userRepositoryImpl->index();
    }

    public function findOrFail($id)
    {
        // repository return variable data
       return $this->userRepositoryImpl->findOrFail($id);
    }
}
