<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefoon extends Model
{
    use HasFactory;

    protected $fillable = [

        'model',

        'fabrikant',

        'geheugen',

        'prijs'

    ];
}

