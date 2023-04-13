<?php

namespace App\Repositories\Admin;

use App\Models\Users;
use App\Repositories\Interface\UserInterface;

class User implements UserInterface
{
    public function getAll()
    {
        return Users::all();
    }
    public function getById($id)
    {
        return Users::find($id);
    }
    public function createUser(array $data)
    {
        $user = new Users();
        $user->username=$data['username'];
        $user->email=$data['email'];
        $user->phone_number=$data['phone_number'];
        $user->password=$data['password'];
        $user->role=$data['role'];
        return $user->save();
    }
    public function deleteUser($id)
    {
        return Users::find($id)->delete();
    }
    public function updateUser(array $data, $id)
    {
        return Users::find($id)->update([
            'username'=>$data['username'],
            'email'=>$data['email'],
            'phone_number'=>$data['phone_number'],
            'password'=>$data['password'],
            'role'=>$data['role']
        ]);
    }

}
