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
            return response()->json('Message: No data found!',501);
        }
        return $data;
    }

    public function create($data)
    {
        if (!$data){
            return response()->json('Message: No create data found!',501);
        }
        return $this->model->create($data);
    }

    public function findOrFail($id)
    {
        $result = $this->model->findOrFail($id);
        if (!$result){
            return response()->json('Error message: No' .$id. ' has found.',501);
        }
        return $result;
    }

    public function update($data, $object)
    {
        // TODO: Implement update() method.
    }
    public function destroy($object)
    {
        // TODO: Implement destroy() method.
    }

    public function show($object)
    {
        // TODO: Implement show() method.
    }


}
