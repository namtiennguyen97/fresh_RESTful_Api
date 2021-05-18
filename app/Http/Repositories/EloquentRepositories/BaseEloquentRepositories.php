<?php


namespace App\Http\Repositories\EloquentRepositories;


use App\Http\Repositories\Repository;

abstract class BaseEloquentRepositories implements Repository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->setModel();
    }


    //get model
    abstract public function getModel();

    // setModel form abstract getModel function
    public function setModel()
    {
        return $this->model = app()->make($this->getModel());
    }


    // start implement origin repository method
    public function index()
    {
        $data = $this->model->all();
        if (!$data){
            return response()->json('Message: No data found!',404);
        }
        return response()->json($data,200);
    }

    public function create($data)
    {
        if (!$data){
            return response()->json('Message: No create data found!',404);
        }
        return $this->model->create($data);
    }

    public function findOrFail($id)
    {
        $result = $this->model->findOrFail($id);
        if (!$result){
            return response()->json('No data found!',404);
        }
       return $result;
    }

    public function update($data, $object)
    {
        if (!$object || !$data){
        return response()->json('No object found!',404);
        }
         $object->update($data);
        return response()->json($object,200);

    }
    public function destroy($object)
    {
        if (!$object){
            return response()->json('Error: No object has found!',404);
        }
         $this->model->destroy($object);
        return response()->json('Data has been deleted!',200);
    }




}
