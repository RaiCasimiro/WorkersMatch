<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory;

    protected $table = "cadastro";

    protected $fillable = [
        "nome",
        "sobrenome",
        "email",
        "telefone",
        "password",
        "estado",
        "cidade",
        "cep",
        "bairro",
        "rua",
        "numero",
     
    ];

    
}
