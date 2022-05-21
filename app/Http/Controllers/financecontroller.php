<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class financecontroller extends Controller
{
    public function updatepf(user $user)
    {
        return view('finance.update_profile',compact('user'));
    }
    public function updateprofile(Request $request, user $user)
    {
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->phonenumber=$request->phonenumber;
        $user->city=$request->city;

        $user->save();

        return redirect(route('finance.display'));
    }
    public function display()
    {
        return view('finance.profile');
    }
    public function password()
    {
        return view('finance.password');
    }
}
