<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Documento
 * 
 * @property int $id_documento
 * @property string $tipo_doc
 * @property int $num_doc
 * @property int|null $id_usuario
 * 
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class Documento extends Model
{
	protected $table = 'documento';
	protected $primaryKey = 'id_documento';
	public $timestamps = false;

	protected $casts = [
		'num_doc' => 'int',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'tipo_doc',
		'num_doc',
		'id_usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}
}
