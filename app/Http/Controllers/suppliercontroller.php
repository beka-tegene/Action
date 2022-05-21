<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postNews;
use App\Models\user;
use App\Models\category;
use App\Models\userpaymentinfo;

class suppliercontroller extends Controller
{
    public function show(Request $request)
    {

        if ($request->category) {
            $postNews = category::where('type',$request->category)->firstOrFail()->PostNews()->paginate(3);
        }else{
            $postNews = postNews::latest()->get();
        }
        $category = category::all();
        $userpaymentinfo = userpaymentinfo::all();
        return view('supplier.tender_news' ,compact('postNews','category', 'userpaymentinfo'));
    }
    public function index(postNews $postNews)
    {
        return view('supplier.view_detail' ,compact('postNews'));
    }

    public function create(postNews $postNews)
    {
        return view('supplier.register_tender',compact('postNews'));
    }
    public function buybid()
    {
        return view('supplier.buy_bid');
    }
    public function updatepf(user $user)
    {
        return view('supplier.update_profile',compact('user'));
    }
    public function updateprofile(Request $request, user $user)
    {
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->phonenumber=$request->phonenumber;
        $user->city=$request->city;

        $user->save();

        return redirect(route('supplier.display'));
    }
    public function display()
    {
        return view('supplier.profile');
    }
    public function checkout()
    {
        return view('supplier.checkout');
    }
    public function password()
    {
        return view('supplier.password');
    }
    public function receipt()
    {
        $postNews = postNews::all();
        return view('supplier.upload_Receipt', compact('postNews'));
    }

}
