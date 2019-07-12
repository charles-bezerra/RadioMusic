<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

	public $fillable = [
		'nome','snome', 'senha', 'email', 'matricula', 'campus'
	];

	public $rules = [
		'nome' => 'required|min:3|max:20',
		'snome' => 'required|min:3|max:80',
		'senha' => 'required|min:8|max:100',
		'email' => 'required|min:12|max:100',
		'matricula' => 'required',
		'campus' => 'required'
	];

	protected $hidden = [
        'senha', 'remember_token',
    ];

    public function pedidos(){
        return $this->hasMany(Pedidos::class, 'usuario_id');
    }
}
