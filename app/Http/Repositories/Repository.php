<?php


namespace App\Http\Repositories;


interface Repository
{
public function index();
public function findOrFail($id);
public function create($data);
public function update($data,$object);
public function show($object);
public function destroy($object);
}
