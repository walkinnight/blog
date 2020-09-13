<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    //限制已用户登录
    public function __construct()
    {
        $this->middleware("guest",[
            'only'=>'create'
        ]);
    }

    //登录页
    public function create(){

        return view("sessions.create");
    }

    //登录信息验证
    public function store(Request $request){

        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials,$request->has('remember'))) {
            session()->flash('success', '欢迎回来！');
            $fallback = redirect()->route('users.show', [Auth::user()]);
            return redirect()->intended($fallback);
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    //退出
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }

}
