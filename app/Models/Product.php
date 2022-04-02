<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    use HasFactory;

    /**
     * El nombre de la tabla asociada al modelo
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * los atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'price', 'quantity'
    ];

    /**
     * devuelve la relacion de muchos a uno con la tabla orders
     *
     * @return HasMany
     */
    public function orderProducts(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    /**
     * Actualiza el stock de un producto
     *
     * @param integer $quantity         la cantidad a actualizar
     * @return void
     */
    public function updateStock(int $quantity): void
    {
        $this->quantity -= $quantity;
        $this->save();
    }

    /**
     * Devuelve los productos con stock disponibles
     *
     * @return self
     */
    public static function withStock()
    {
        return self::where('quantity', '>', 0)->limit(8)->get();
    }
}
