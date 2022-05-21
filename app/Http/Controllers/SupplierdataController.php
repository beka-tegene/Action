<?php

namespace App\Http\Controllers;

use App\Models\supplierdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $file=$request->technical;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->technical->move('Technical',$filename);
        $file=$request->financial;
        $filefinancial=time().'.'.$file->getClientOriginalExtension();
        $request->financial->move('Financial',$filefinancial);
        $user=Auth::user()->id;

        $supplierdata =new supplierdata();
        $supplierdata->technical = $filename;
        $supplierdata->financial = $filefinancial;
        $supplierdata->user_id = $user;

        $supplierdata->save();

        return redirect(route('supplier.show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supplierdata  $supplierdata
     * @return \Illuminate\Http\Response
     */
    public function show(supplierdata $supplierdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supplierdata  $supplierdata
     * @return \Illuminate\Http\Response
     */
    public function edit(supplierdata $supplierdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supplierdata  $supplierdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supplierdata $supplierdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supplierdata  $supplierdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplierdata $supplierdata)
    {
        //
    }
}
