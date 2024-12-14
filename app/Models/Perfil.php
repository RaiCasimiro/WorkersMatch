<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfil';

    protected $fillable = [
        'nome',
        'sobrenome',
        'telefone',
        'email',
        'redes',
        'cursos',
        'sobre',
        'experiencias',
        'formacoes',
    ];
}
