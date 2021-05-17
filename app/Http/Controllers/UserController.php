<?php

namespace App\Http\Controllers;

use App\Http\Services\ServiceImplement\UserServiceImpl;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userServiceImplement;
    public function __construct(UserServiceImpl $userServiceImpl)
    {
        $this->userServiceImplement = $userServiceImpl;
    }

    public function index(){
        return $this->userServiceImplement->index();
    }

    public function findOrFail($id){
        return $this->userServiceImplement->findOrFail($id);
    }
}
