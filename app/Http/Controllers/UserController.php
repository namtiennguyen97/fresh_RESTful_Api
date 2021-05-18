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

    public function index()
    {
        return $this->userServiceImplement->index();
    }

    public function findOrFail($id)
    {
        return $this->userServiceImplement->findOrFail($id);
    }

    public function create(Request $request)
    {
        // uncomment the codes below if u want to custom validate or make new RequestValidator with Laravel - php artisan make:request UserRequest

//        $request->validate([
//            'name' => 'required|max:20',
//            'email' => 'unique:users|required',
//            'password' => 'required'
//        ]);

        $newData = $this->userServiceImplement->create($request->all());
        return response()->json($newData, 200);
    }


    public function update(Request $request, $id)
    {
        $currentUser = $this->userServiceImplement->findOrFail($id);
        return $this->userServiceImplement->update($request->all(), $currentUser);
    }

    public function show($id){
       $user = $this->userServiceImplement->findOrFail($id);
       return view('update',compact('user'));
    }
}
