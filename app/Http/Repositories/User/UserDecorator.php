<?php

namespace App\Http\Repositories\User;

class UserDecorator implements UserInterface
{

    private $UserRepository;

    public function __construct(UserRepository $UserRepository) {
        $this->UserRepository = $UserRepository;
    }

    public function getUsers()
    {
        return $this->UserRepository->getUsers();
    }

    public function store($request)
    {
        $User = $this->UserRepository->store($request);
        return $User;
    }

    public function getUserById($id)
    {
        return $this->UserRepository->getUserById($id);
    }

    public function getVoidUser()
    {
        return $this->UserRepository->getVoidUser();
    }

    public function update($request, $id)
    {
        return $this->UserRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->UserRepository->destroy($id);
    }
}
