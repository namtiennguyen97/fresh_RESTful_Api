<?php


namespace App\Http\Services;


interface BaseServices
{
    public function index();

    public function findOrFail($id);

    public function create($data);

    public function update($request, $id);

    public function show($id);

    public function destroy($id);
}
