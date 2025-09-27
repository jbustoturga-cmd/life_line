<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo_electronico',
        'telefono',
        'id_rol'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_rol');
    }
}
