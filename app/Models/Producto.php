<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_producto
 * @property int|null $unidades_disponibles
 * @property int|null $precio
 * @property string|null $descripcion
 * @property string|null $caracteristicas
 * 
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'id_producto';
	public $timestamps = false;

	protected $casts = [
		'unidades_disponibles' => 'int',
		'precio' => 'int'
	];

	protected $fillable = [
		'unidades_disponibles',
		'precio',
		'descripcion',
		'caracteristicas'
	];

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'id_producto');
	}
}
