<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoEnvio
 * 
 * @property int $id_estado_envio
 * @property string|null $estado_envio
 * 
 * @property Collection|Envio[] $envios
 *
 * @package App\Models
 */
class EstadoEnvio extends Model
{
	protected $table = 'estado_envio';
	protected $primaryKey = 'id_estado_envio';
	public $timestamps = false;

	protected $fillable = [
		'estado_envio'
	];

	public function envios()
	{
		return $this->hasMany(Envio::class, 'id_estado_envio');
	}
}
