<?php

namespace App\Models;

use App\Utils\Currency;
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
     * Los atributos adicionales ocultos del modelo
     *
     * @var array
     */
    protected $appends = ['currency'];

    /**
     * devuelve el tipo de moneda de la orden
     *
     * @return string
     */
    public function getCurrencyAttribute()
    {
        return Currency::USD_SYMBOL;
    }

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
     * Actualiza el stock de un producto sumando la cantidad
     *
     * @param integer $quantity         la cantidad a actualizar
     * @return void
     */
    public function giveBackStock(int $quantity): void
    {
        $this->quantity += $quantity;
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
