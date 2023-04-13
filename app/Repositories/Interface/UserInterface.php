<?php

namespace App\Repositories\Interface;

interface UserInterface
{
    public function getAll();
    public function getById($id);
    public function createUser(array $data);
    public function updateUser(array $data,$id);
    public function deleteUser($id);
}
