<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'sexo','data_nascimento','cpf','telefone'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
