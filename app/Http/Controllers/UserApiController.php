<?php

namespace App\Http\Controllers;

use App\Http\Services\ServiceImplement\UserServiceImpl;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserApiController extends Controller
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


    public function create()
    {
       //return view
    }


    public function store(Request $request)
    {
        $newData = $this->userServiceImplement->create($request->all());
        return response()->json($newData, 200);
    }


    public function show($id)
    {
        return $this->userServiceImplement->findOrFail($id);
    }


    public function edit($id)
    {
        //return view
    }


    public function update(Request $request, $id)
    {
        $currentUser = $this->userServiceImplement->findOrFail($id);
        return $this->userServiceImplement->update($request->all(), $currentUser);
    }


    public function destroy($id)
    {
        $this->userServiceImplement->destroy($id);
    }
}
