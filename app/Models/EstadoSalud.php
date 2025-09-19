<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoSalud
 * 
 * @property int $id_estado_salud
 * @property int|null $id_usuario
 * @property Carbon|null $fecha_diagnostico
 * @property string|null $estadio_cancer
 * 
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class EstadoSalud extends Model
{
	protected $table = 'estado_salud';
	protected $primaryKey = 'id_estado_salud';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'fecha_diagnostico' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'fecha_diagnostico',
		'estadio_cancer'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
