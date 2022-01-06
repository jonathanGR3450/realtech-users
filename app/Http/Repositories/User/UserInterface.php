<?php

namespace App\Http\Repositories\User;

interface UserInterface
{
    public function getUsers();
    public function store($request);
    public function getUserById($id);
    public function getVoidUser();
    public function update($request, $id);
    public function destroy($id);
}
