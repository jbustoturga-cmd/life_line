<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;

    protected $fillable = [
        'rol_nombre'
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_rol');
    }
}
