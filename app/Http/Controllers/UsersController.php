<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //注册页面
    public function create(){
        return view('users.create');
    }

    //用戶個人信息頁面
    public function show(User $user){
        return view('users.show',compact('user'));
    }
}
