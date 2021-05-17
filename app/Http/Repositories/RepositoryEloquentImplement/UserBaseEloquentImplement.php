<?php


namespace App\Http\Repositories\RepositoryEloquentImplement;




use App\Http\Repositories\EloquentRepositories\BaseEloquentRepositories;
use App\Http\Repositories\UserRepository;
use App\Models\User;

class UserBaseEloquentImplement extends BaseEloquentRepositories implements UserRepository
{
    // You just implement getModel to setup yout model.
    public function getModel()
    {
       $user = User::class;
       if (!$user){
           return response()->json('Error: Sever Model not found.',500);
       }
       return $user;
    }
}
