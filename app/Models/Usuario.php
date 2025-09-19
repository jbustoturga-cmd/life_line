<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usuario
 * @property string|null $nombre
 * @property string|null $apellido
 * @property int|null $id_genero
 * @property Carbon $fecha_nacimiento
 * @property string $correo_electronico
 * @property string|null $telefono
 * @property int|null $id_rol
 * 
 * @property Genero|null $genero
 * @property Role|null $role
 * @property Collection|ComentariosMural[] $comentarios_murals
 * @property Contacto|null $contacto
 * @property Collection|Direccion[] $direccions
 * @property Collection|Documento[] $documentos
 * @property Collection|EstadoSalud[] $estado_saluds
 * @property Collection|Factura[] $facturas
 * @property Collection|MuralMotivacional[] $mural_motivacionals
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'id_genero' => 'int',
		'fecha_nacimiento' => 'datetime',
		'id_rol' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'id_genero',
		'fecha_nacimiento',
		'correo_electronico',
		'telefono',
		'id_rol'
	];

	public function genero()
	{
		return $this->belongsTo(Genero::class, 'id_genero');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_rol');
	}

	public function comentarios_murals()
	{
		return $this->hasMany(ComentariosMural::class, 'id_usuario');
	}

	public function contacto()
	{
		return $this->hasOne(Contacto::class, 'id_usuario');
	}

	public function direccions()
	{
		return $this->hasMany(Direccion::class, 'id_usuario');
	}

	public function documentos()
	{
		return $this->hasMany(Documento::class, 'id_usuario');
	}

	public function estado_saluds()
	{
		return $this->hasMany(EstadoSalud::class, 'id_usuario');
	}

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'id_usuario');
	}

	public function mural_motivacionals()
	{
		return $this->hasMany(MuralMotivacional::class, 'id_usuario');
	}
}
