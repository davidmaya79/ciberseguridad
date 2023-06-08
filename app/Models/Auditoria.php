<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;

    protected $table = 'auditorias';

    protected $fillable = [
        'descripcion_auditoria',
        'documentacion_auditoria',
        'fecha_inicio',
        'fecha_fin',
        'cliente_id',
        'nombre_cliente' 
         
    ];

    public function cliente()
    
    {
        return $this->belongsTo(Cliente::class,'cliente_id');
    }


}
