<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 * 
 * @property int $id_genero
 * @property string $genero
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Genero extends Model
{
	protected $table = 'genero';
	protected $primaryKey = 'id_genero';
	public $timestamps = false;

	protected $fillable = [
		'genero'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_genero');
	}
}
