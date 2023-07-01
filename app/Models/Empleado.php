<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombre_empleado',
        'apellido_empleado',
        'rut_empleado',
        'email_empleado',
        'telefono_empleado',
        'puesto_empleado',
        'empleado_id'
    ];

    public function auditoria()
    {
        return $this->belongsToMany(Auditoria::class,'auditorias_empleados','empleado_id','auditoria_id');
    }

    public function acciones()
    {
        return $this->hasMany(Accion::class);
    }
     
}








