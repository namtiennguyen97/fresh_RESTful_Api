<?php


namespace App\Http\Controllers\ApiController;


use App\Http\Controllers\Controller;
use App\Http\Services\ServiceImplement\UserServiceImpl;

class UserApiController extends Controller
{
    protected $userService;

    public function __construct(UserServiceImpl $userServiceImpl)
    {
        $this->userService = $userServiceImpl;
    }

    public function indexApi(){
        return $this->userService->index();
    }
}
