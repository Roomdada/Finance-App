<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

        $user = User::firstWhere(['email' => $request->email]);


           if (empty($user->toArray()) || !password_verify($request->password, $user->password)) {

               session()->flash('error','Mot de passe ou email incorrect!');
               return back();
           }



         if ($user['validation_1'] ==  1) {

            $request->authenticate();
            $request->session()->regenerate();
            session()->flash('messae',"Hello auth()->user()->firstname,nous sommes heureux de vous revoir!");
            return redirect()->route('user.account');
         }

        session()->flash('error','Veuillez activé votre compte!');
        return redirect()->route('login');


    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        session()->flash('message','Vous etes deconnecté');
        return redirect()->route('login');
    }
}
