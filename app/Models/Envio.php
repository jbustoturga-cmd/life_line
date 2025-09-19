<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Envio
 * 
 * @property int $id_envio
 * @property int|null $id_factura
 * @property int|null $id_direccion
 * @property Carbon|null $fecha_de_envio
 * @property int|null $id_estado_envio
 * @property int|null $id_empresa
 * 
 * @property Factura|null $factura
 * @property Direccion|null $direccion
 * @property EstadoEnvio|null $estado_envio
 * @property EmpresaEnvio|null $empresa_envio
 *
 * @package App\Models
 */
class Envio extends Model
{
	protected $table = 'envio';
	protected $primaryKey = 'id_envio';
	public $timestamps = false;

	protected $casts = [
		'id_factura' => 'int',
		'id_direccion' => 'int',
		'fecha_de_envio' => 'datetime',
		'id_estado_envio' => 'int',
		'id_empresa' => 'int'
	];

	protected $fillable = [
		'id_factura',
		'id_direccion',
		'fecha_de_envio',
		'id_estado_envio',
		'id_empresa'
	];

	public function factura()
	{
		return $this->belongsTo(Factura::class, 'id_factura');
	}

	public function direccion()
	{
		return $this->belongsTo(Direccion::class, 'id_direccion');
	}

	public function estado_envio()
	{
		return $this->belongsTo(EstadoEnvio::class, 'id_estado_envio');
	}

	public function empresa_envio()
	{
		return $this->belongsTo(EmpresaEnvio::class, 'id_empresa');
	}
}
