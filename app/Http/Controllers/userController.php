<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function confirmAccount(string $token)
    {
    	$user = User::firstWhere('token',$token)->first();
    	if ($user->validation != 1) {
	    	$user = $user->update(['validation_1' => 1]);
	    	session()->flash('message','Votre compte a été confirmé, connecter vous maintenant');
	    	return redirect()->route('login');
    		
    	}

    	session()->flash('message','Votre compte a été déja confirmé');
    	return redirect()->route('login');
    }
}
