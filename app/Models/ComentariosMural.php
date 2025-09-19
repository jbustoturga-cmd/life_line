<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ComentariosMural
 * 
 * @property int $id_comentario
 * @property int|null $id_publicacion
 * @property int|null $id_usuario
 * @property string|null $comentario
 * @property Carbon|null $fecha_comentario
 * 
 * @property MuralMotivacional|null $mural_motivacional
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class ComentariosMural extends Model
{
	protected $table = 'comentarios_mural';
	protected $primaryKey = 'id_comentario';
	public $timestamps = false;

	protected $casts = [
		'id_publicacion' => 'int',
		'id_usuario' => 'int',
		'fecha_comentario' => 'datetime'
	];

	protected $fillable = [
		'id_publicacion',
		'id_usuario',
		'comentario',
		'fecha_comentario'
	];

	public function mural_motivacional()
	{
		return $this->belongsTo(MuralMotivacional::class, 'id_publicacion');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
