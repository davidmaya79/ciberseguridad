<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;

    protected $table = 'acciones';

    protected $fillable = [
        'responsable_acciones',
        'descripcion_acciones',
        'fecha_implementacion',
        'auditoria_id',
        'nombre_cliente',
        'cliente_id'
    ];

    public function auditoria()
    
    {
        return $this->belongsTo(Auditoria::class,'auditoria_id'/* ,'cliente_id','nombre_cliente' */);
    }

}
