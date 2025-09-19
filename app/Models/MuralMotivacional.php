<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MuralMotivacional
 * 
 * @property int $id_publicacion
 * @property int|null $id_usuario
 * @property string|null $contenido
 * @property string|null $imagen
 * @property Carbon|null $fecha_de_publicacion
 * 
 * @property Usuario|null $usuario
 * @property Collection|ComentariosMural[] $comentarios_murals
 *
 * @package App\Models
 */
class MuralMotivacional extends Model
{
	protected $table = 'mural_motivacional';
	protected $primaryKey = 'id_publicacion';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'fecha_de_publicacion' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'contenido',
		'imagen',
		'fecha_de_publicacion'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}

	public function comentarios_murals()
	{
		return $this->hasMany(ComentariosMural::class, 'id_publicacion');
	}
}
