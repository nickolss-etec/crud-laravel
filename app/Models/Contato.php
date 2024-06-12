<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    // Define quais atributos podem ser atribuídos ao model
    protected $fillable = [
        "nome",
        "telefone",
        "email"
    ];
}
