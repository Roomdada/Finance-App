<?php

namespace App\Http\Livewire;

use App\Models\Pack;
use App\Models\Transaction;
use Livewire\Component;

class Depot extends Component
{

	public $pack,$payement,$r_money;

	protected $rules = ['pack' => 'required','payement' => 'required|string'];


  protected $messages = [
        'pack.required' => 'Veuillez choisir un pack',
        'payement.required' => 'Veuillez choisir votre moyen de payement',
        'payement.string' => 'Choississez un moyen de payement valide',
    ];



	public function updatedPack()
	{
		$data = PAck::findOrFail($this->pack);
		$this->r_money = $data->money_r;
	}


	public function CreateTransaction()
	{
		$this->validate();
		Transaction::create(['user_id' => auth()->user()->id,'pack_id' => $this->pack,'payement' => $this->payement]);

		session()->flash('message','Demande envoyé un agent vous contactera!');
		$this->payement = null;
		$this->pack = null;
		$this->r_money = null;
		return back();

	}

    public function render()
    {

    	$packs = Pack::all();
        return view('livewire.depot',compact("packs"));
    }
}
