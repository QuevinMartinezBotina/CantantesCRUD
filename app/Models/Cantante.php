<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantante extends Model
{
    static $rules = [
        'name_cantante' => 'required',
        'genero' => 'required',
    ];

    protected $perPage = 20;

    use HasFactory;

    protected $fillable = ['name_cantante', 'genero','pais'];
}
