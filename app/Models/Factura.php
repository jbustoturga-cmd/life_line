<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id_factura
 * @property int|null $id_usuario
 * @property Carbon $fecha_de_compra
 * @property int|null $precio_total
 * @property int|null $id_producto
 * @property int $cantidad_productos
 * 
 * @property Usuario|null $usuario
 * @property Producto|null $producto
 * @property Collection|Envio[] $envios
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'facturas';
	protected $primaryKey = 'id_factura';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'fecha_de_compra' => 'datetime',
		'precio_total' => 'int',
		'id_producto' => 'int',
		'cantidad_productos' => 'int'
	];

	protected $fillable = [
		'id_usuario',
		'fecha_de_compra',
		'precio_total',
		'id_producto',
		'cantidad_productos'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_usuario');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_producto');
	}

	public function envios()
	{
		return $this->hasMany(Envio::class, 'id_factura');
	}
}
