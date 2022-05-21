<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class procurmentapprovingcontroller extends Controller
{
    public function updatepf(user $user)
    {
        return view('Procurement_approving_commite.update_profile',compact('user'));
    }
    public function updateprofile(Request $request, user $user)
    {
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->phonenumber=$request->phonenumber;
        $user->city=$request->city;

        $user->save();

        return redirect(route('procurmentapproving.display'));
    }
    public function display()
    {
        return view('Procurement_approving_commite.profile');
    }
    public function password()
    {
        return view('Procurement_approving_commite.password');
    }
}
