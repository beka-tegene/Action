<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;

class admincontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = user::all();
        return view('admin.account_list',compact('users'));
    }

    public function create()
    {
        return view('admin.create_account');
    }
    public function upload(Request $request)
    {
        $user =new User;

        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->usertype=$request->usertype;
        $user->phonenumber=$request->phonenumber;
        $user->password=Hash::make($request->password);

        $user->save();

        return redirect(route('admin.index'));
    }

    public function edit(user $user)
    {
        return view('admin.update_account',compact('user'));
    }

    public function update(Request $request, user $user)
    {
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->usertype=$request->usertype;
        $user->phonenumber=$request->phonenumber;
        $user->city=$request->city;

        $user->save();

        return redirect(route('admin.display'));
    }

    public function destroy(user $user)
    {
        $user->delete();

        return redirect()->back();
    }

    public function block()
    {
        $users = user::all();
        return view('admin.block_account',compact('users'));
    }
    public function ban(user $user)
    {
        return view('admin.blockunblock',compact('user'));
    }
    public function editban(Request $request, user $user)
    {
        $user->active=$request->active;

        $user->save();

        return redirect(route('admin.block'));
    }
    public function display()
    {
        return view('admin.profile');
    }
    public function updateprofile(user $user)
    {
        return view('admin.update_profile',compact('user'));
    }
    public function password()
    {
        return view('admin.password');
    }
    public function postPassword(Request $request){

        $this->validate($request, [
            'current_password' => ['required', new MatchOldPassword],
            'newpassword' => 'required|min:6|max:30|confirmed',
        ]);

        $user = auth()->user();

            $user->update([
                'password' => bcrypt($request->newpassword)
            ]);
            return redirect()->back()->with('success', 'Password has been Changed Successfully');

    }

}
