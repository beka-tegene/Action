<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requests;
use App\Models\user;
use App\Models\category;
use App\Models\PostNews;

class procurmentteamcontroller extends Controller
{
    public function create()
    {
        $category =category::all();
        return view('procurement_team.create_post',compact('category'));
    }

    public function index()
    {
        $requests = requests::all();
        return view('procurement_team.request_information',compact('requests'));
    }
    public function updatepf(user $user)
    {
        return view('procurement_team.update_profile',compact('user'));
    }
    public function updateprofile(Request $request, user $user)
    {
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->phonenumber=$request->phonenumber;
        $user->city=$request->city;

        $user->save();

        return redirect(route('procurmentteam.display'));
    }
    public function display()
    {
        return view('procurement_team.profile');
    }
    public function show()
    {
        $postNews = PostNews::all();
        return view('procurement_team.view-tender', compact('postNews'));
    }
    public function edit(PostNews $postNews)
    {

        return view('procurement_team.edit-tender', compact('postNews'));
    }
    public function destroy(PostNews $postNews)
    {
        $postNews->delete();
        return redirect()->back();
    }
    public function password()
    {
        return view('procurement_requester.password');
    }
}
