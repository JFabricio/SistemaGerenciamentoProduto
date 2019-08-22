<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable=[
        'codigo','nome','marca','valor','data_entrada','data_saida'
    ];
}
