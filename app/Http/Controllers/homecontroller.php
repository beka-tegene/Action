<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function redirect()
    {
        if(auth::id()){
            if(auth::user()->usertype=='supplier'){
                return view('supplier.home_dashboard');
            }elseif(auth::user()->usertype=='finance'){
                return view('finance.home_dashboard');
            }elseif(auth::user()->usertype=='pt'){
                return view('procurement_team.home');
            }elseif(auth::user()->usertype=='pac'){
                return view('Procurement_approving_commite.home');
            }elseif(auth::user()->usertype=='pr'){
                return view('procurement_requester.home');
            }elseif(auth::user()->usertype=='admin'){
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }
}
