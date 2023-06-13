<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hallazgo extends Model
{
    use HasFactory;

    protected $table = 'hallazgos';

    protected $fillable = [
        'descripcion_hallazgo',
        'fecha_deteccion',
        'clasificacion_hallazgo',
        'auditoria_id',
        'nombre_cliente',
        'cliente_id'
    ];

    public function auditoria()
    
    {
        return $this->belongsTo(Auditoria::class,'auditoria_id'/* ,'cliente_id','nombre_cliente' */);
    }

   

}
