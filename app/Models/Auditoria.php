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
        'empleado_id'

        //* 'nombre_cliente'
        // 'empleado_id',
        // 'nombre_empleado' 
         
    ];

    public function cliente()
    
    {
        return $this->belongsTo(Cliente::class,'cliente_id');
    }

    public function empleados()
{
    return $this->belongsToMany(Empleado::class, 'auditorias_empleados', 'auditoria_id', 'empleado_id');
}

    public function hallazgo()
    
    {
        return $this->hasMany(Hallazgo::class/* ,'auditoria_id' */);
    }

    public function accion()
    
    {
        return $this->hasMany(Accion::class/* ,'auditoria_id' */);
    }
     
     

}
