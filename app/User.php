<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    public $fillable = [
        'name', 'password', 'email', 'matricula'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $rules = [
        'name' => 'required|min:3|max:20',
        'sname' => 'required|min:3|max:80',
        'password' => 'required|min:6|max:100',
        'email' => 'required|min:12|max:100',
        'matricula' => 'required',
        'campus' => 'required'
    ];

    public function pedidos(){
        return Model::hasMany(Pedido::class, 'usuario_id');
    }
}
