<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function usersList()
    {
        $users = User::all();
        return view('admin.user.usersList', compact('users'));
    }

    public function create()
    {

        return view('admin.user.create');
    }

    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem && $userItem instanceof User) {
                $userItem->delete();
                return redirect()->route('admin.user.list')->with('success','کاربر مورد نظر با موفقیت حذف گردید.');
            }
        }
    }

    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)){
            $userItem = User::find($user_id);
            if ($userItem && $userItem instanceof User){
                return view('admin.user.edit',compact('userItem'));
            }
        }
    }

    public function update(UserRequest $userRequest,$user_id)
    {
        $inputs=request()->except('_token');
        if (empty(request()->input('password'))){
            unset($inputs['password']);
        }
      //  $inputs['password'] = bcrypt($inputs['password']);
        $userItem = User::find($user_id);
        $userItem->update($inputs);
        return redirect()->route('admin.user.list')->with('success','اطلاعات کاربر مورد نظر با موفقیت به روزرسانی شد');
    }
}
