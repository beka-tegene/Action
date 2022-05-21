<?php

namespace App\Http\Controllers;

use App\Models\userpaymentinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserpaymentinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userpaymentinfo = userpaymentinfo::latest()->get();
        $user = User::all();

        return view('finance.payment_history' , compact('userpaymentinfo','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->receipt;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->receipt->move('Receipt',$filename);
        $file=$request->guarantee;
        $fileguarantee=time().'.'.$file->getClientOriginalExtension();
        $request->guarantee->move('Bank_Guarantee',$fileguarantee);
        $user=Auth::user()->id;

        $userpaymentinfo =new userpaymentinfo();
        $userpaymentinfo->receipt = $filename;
        $userpaymentinfo->guarantee = $fileguarantee;
        $userpaymentinfo->user_id = $user;

        $userpaymentinfo->save();

        return redirect(route('supplier.show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userpaymentinfo  $userpaymentinfo
     * @return \Illuminate\Http\Response
     */
    public function show(userpaymentinfo $userpaymentinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userpaymentinfo  $userpaymentinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(userpaymentinfo $userpaymentinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userpaymentinfo  $userpaymentinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userpaymentinfo $userpaymentinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userpaymentinfo  $userpaymentinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(userpaymentinfo $userpaymentinfo)
    {
        //
    }
    public function approval($id)
    {
        $userpaymentinfo = userpaymentinfo::find($id);
        $userpaymentinfo->status='approved';

        $userpaymentinfo->save();
        return redirect()->back();
    }
    public function pending($id)
    {
        $userpaymentinfo = userpaymentinfo::find($id);
        $userpaymentinfo->status='pending';

        $userpaymentinfo->save();
        return redirect()->back();
    }
}
