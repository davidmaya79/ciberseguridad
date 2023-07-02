<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    use SoftDeletes;

    protected $fillable = [
        'nombre_cliente',
        'email_cliente',
        'telefono_cliente',
        'rut_cliente',
        'direccion_cliente',
    ];

    public function auditoria()
    
    {
        return $this->hasMany(Auditoria::class);
    }
     
}
