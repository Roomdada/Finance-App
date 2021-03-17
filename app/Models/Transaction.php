<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','pack_id','type','payement','ok'];


    public function user(){

        return $this->belongsTo('App\Models\User');
    }


    public function pack(){
        return $this->belongsTo('App\Models\Pack');
    }

}
