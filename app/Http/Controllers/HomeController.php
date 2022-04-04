<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
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

        if(!Auth::User()) {

            return view('welcome');

            }

            elseif(Auth::User()->role=='admin'){

                   return view('admin.adashboard',);
            }

            elseif(Auth::User()->role=='individual'){

                return view('individual.profile',);
         }

         elseif(Auth::User()->role=='engineer'){

            return view('engineer.eprofile',);
     }

     elseif(Auth::User()->role=='manufacturer'){

        return view('manufacturer.mprofile',);
 }

       
  
    }
}
