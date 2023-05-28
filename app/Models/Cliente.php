<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre_cliente',
        'email_cliente',
        'telefono_cliente',
        'rut_cliente',
        'direccion_cliente',
    ];

     
}
