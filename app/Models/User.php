<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'country',
        'sexe',
        'validation_1',
        'validation_2',
        'code_parrain',
        'my_parrain',
        'token',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function requests()
    {
        return $this->hasMany('App\Models\Request');
    }


    public function MyParrain(int $payload, string $key)
    {
        return $payload == 1 ? User::where('code_parrain',$key)->first() : User::where('my_parrain',$key)->get();
    }


    public function transaction(){

        return $this->hasMany('App\Models\Transaction');
    }


    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
