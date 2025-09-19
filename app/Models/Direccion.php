<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccion
 * 
 * @property int $id_direccion
 * @property string|null $direccion
 * @property int|null $id_usuario
 * 
 * @property Usuario|null $usuario
 * @property Collection|Envio[] $envios
 *
 * @package App\Models
 */
class Direccion extends Model
{
	protected $table = 'direccion';
	protected $primaryKey = 'id_direccion';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'direccion',
		'id_usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}

	public function envios()
	{
		return $this->hasMany(Envio::class, 'id_direccion');
	}
}
