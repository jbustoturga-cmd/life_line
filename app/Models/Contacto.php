<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 * 
 * @property int $id_usuario
 * @property string $correo_electronico
 * @property string|null $telefono
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Contacto extends Model
{
	protected $table = 'contacto';
	protected $primaryKey = 'id_usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'correo_electronico',
		'telefono'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
