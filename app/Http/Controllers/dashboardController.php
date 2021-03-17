<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function myAccount(){
    	
    	$filleules  = User::where('code_parrain',auth()->user()->token)->paginate(10);
    	return view('pages.dashboard.index',compact('filleules'));
    }

    public function myFilleules(){

     	$filleules = User::where('code_parrain',auth()->user()->token)->paginate(10);
    	return view('pages.dashboard.index',['filleules' => $filleules]);
    }


    public function myInvestments()
    {
      $money = User::with('requests')->where('token',auth()->user()->token)->paginate(10);
      return view('pages.dashboard.money',['money' => $money]);

    }


    public function myTransaction()
    {
      $money = User::where('token',auth()->user()->token)->paginate(10);
      return view('pages.dashboard.transaction',['money' => $money]);
    }


    public function makeRequest(string $type)
    {
      $money = User::where('token',auth()->user()->token)->paginate(10);
      return view('pages.dashboard.make-request',['money' => $money,'type' => $type]);
    }
}
