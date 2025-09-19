<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EmpresaEnvio
 * 
 * @property int $id_empresa
 * @property string|null $nombre_empresa
 * 
 * @property Collection|Envio[] $envios
 *
 * @package App\Models
 */
class EmpresaEnvio extends Model
{
	protected $table = 'empresa_envio';
	protected $primaryKey = 'id_empresa';
	public $timestamps = false;

	protected $fillable = [
		'nombre_empresa'
	];

	public function envios()
	{
		return $this->hasMany(Envio::class, 'id_empresa');
	}
}
