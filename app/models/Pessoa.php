<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'data_nasc',
        'nacionalidade'
    ];

    public function setCpfAttribute($value)
    {
        $value = trim($value);
        $value = str_replace(".", "", $value);
        $value = str_replace("-", "", $value);
        $this->attributes['cpf'] = $value;
    }
}
