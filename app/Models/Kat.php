<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kat extends Model
{
    protected $table = 'kats';

    protected $fillable = [
        'nome',
        'idade',
        'sexo',
        'raca',
        'resumo',
    ];
}
