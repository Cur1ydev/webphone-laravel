<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        $allUser = $this->user->getAll();
        return view('admin.user.user', compact('allUser'));
    }

    public function addUser()
    {
        return view('admin.user.adduser');
    }

    public function addUserPost(Request $request)
    {
        $rule = [
            'username' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:6',
            'role' => 'required'
        ];
        $mess = [
            'username.required' => 'Username phải được nhập',
            'email.required' => 'Email phải được nhập',
            'phone_number.required' => 'Số điện thoại phải được nhập',
            'password.required' => 'Mật khẩu phải được nhập',
            'password.min'=>'Mật khẩu phải lớn hơn :min ký tự',
            'role.required' => 'Vai trò phải được nhập',
        ];
        $request->validate($rule, $mess);
        $data=[
            'username'=>$request->username,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>$request->password,
            'role'=>$request->role
        ];
        $this->user->createUser($data);
        return redirect()->route('admin.user');
    }
    public function getByid(Request $request){
        $getUser=$this->user->getById($request->id);
        return view('admin.user.edituser',compact('getUser'));
    }
    public function updateUser(Request $request){
        $rule = [
            'username' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:6',
            'role' => 'required'
        ];
        $mess = [
            'username.required' => 'Username phải được nhập',
            'email.required' => 'Email phải được nhập',
            'phone_number.required' => 'Số điện thoại phải được nhập',
            'password.required' => 'Mật khẩu phải được nhập',
            'password.min'=>'Mật khẩu phải lớn hơn :min ký tự',
            'role.required' => 'Vai trò phải được nhập',
        ];
        $request->validate($rule, $mess);
        $data=[
            'username'=>$request->username,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>$request->password,
            'role'=>$request->role
        ];
        $this->user->updateUser($data,$request->id);
        return redirect()->route('admin.user');
    }
    public function deleteUser(Request $request){
        $this->user->deleteUser($request->id);
        return redirect()->route('admin.user');
    }

}
