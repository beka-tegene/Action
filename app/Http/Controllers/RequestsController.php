<?php

namespace App\Http\Controllers;

use App\Models\requests;
use App\Models\user;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = requests::all();
        return view('procurement_requester.request_information',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procurement_requester.create_requester');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itemname = $request->input('itemname');
        $Quantity = $request->input('Quantity');
        $description = $request->input('description');

        $requests =new requests();
        $requests->itemname = $itemname;
        $requests->Quantity = $Quantity;
        $requests->description = $description;

        $requests->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function show(requests $requests)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function edit(requests $requests)
    {
        return view('procurement_requester.edit_request',compact('requests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, requests $requests)
    {
        $requests->itemname=$request->itemname;
        $requests->Quantity=$request->Quantity;
        $requests->description=$request->description;


        $requests->save();

        return redirect(route('requests.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(requests $requests)
    {
        $requests->delete();

        return redirect()->back();
    }
    public function updatepf(user $user)
    {
        return view('procurement_requester.update_profile',compact('user'));
    }
    public function updateprofile(Request $request, user $user)
    {
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->phonenumber=$request->phonenumber;
        $user->city=$request->city;

        $user->save();

        return redirect(route('requests.display'));
    }
    public function display()
    {
        return view('procurement_requester.profile');
    }
    public function password()
    {
        return view('procurement_requester.password');
    }
}
