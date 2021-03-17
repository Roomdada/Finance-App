<?php

namespace App\Http\Livewire;

use App\Mail\AccountConfirmation;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class RegisterComponent extends Component
{


    public $firstname,$lastname,$genre,$country,$password,$code_parrain,$phone,$email,$password_confirmation;


    protected $rules  = 
    [
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'email' => 'required|email|unique:users',
        'phone' => 'required|string',
        'genre' => 'required|string',
        'country' => 'required|string',


    ];



	public function createUserAccount()
	{
		$this->validate();

		if ($this->password != $this->password_confirmation) {
		    session()->flash('error','Mots de passes differents');
		    return back();
			
		}

		 $data = User::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'sexe' => $this->genre,
            'country' => $this->country,
            'email' => $this->email,
            'token' => Str::random(60),
            'code_parrain' =>  substr($this->firstname, 0,2).rand(1,9).date('Y'),
            'my_parrain' => $this->code_parrain ? $this->code_parrain : null,
            'password' => Hash::make($this->password),
        ]);
		$this->refreshInput();
		
        Mail::to($data->email)->send(new AccountConfirmation($data));

		session()->flash('message','Bravo,votre inscription a été prise en compte veuillez la finalisée via le mssage reçu par email');
		return back();
		
	}



	private function refreshInput()
	{
		$this->firstname = null;
		$this->lastname = null;
		$this->phone = null;
		$this->genre = null;
		$this->country = null;
		$this->email = null;
		$this->code_parrain = null;
		$this->password = null;
	}
    public function render()
    {
        return view('livewire.register-component');
    }
}
