<?php

namespace App\Http\Repositories\User;

use App\Models\User;

class UserRepository implements UserInterface
{
    public function getUsers()
    {
        return User::orderBy('created_at', request('sorted', 'ASC'))
        ->paginate(10);
    }

    public function store($request)
    {
        $User = User::create($request->validated());
        return $User;
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    public function getVoidUser()
    {
        return new User();
    }

    public function update($request, $id)
    {
        return User::findOrFail($id)->update($request->validated());
    }

    public function destroy($id)
    {
        return User::findOrFail($id)->delete();
    }
}