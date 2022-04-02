<?php

namespace App\Models;

use App\Utils\Currency;
use App\Utils\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    use SoftDeletes;

    /**
     * La tabla asociada al modelo order
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Los atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'order_number',
        'tax',
        'total',
        'comment',
        'status',
    ];

    /**
     * Los atributos adicionales ocultos del modelo
     *
     * @var array
     */
    protected $appends = ['currency', 'status_label'];

    /**
     * devuelve el tipo de moneda de la orden
     *
     * @return string
     */
    public function getCurrencyAttribute(): string
    {
        return Currency::USD_SYMBOL;
    }

    /**
     * Devuelve el estado de la orden en formato de texto
     *
     * @return string
     */
    public function getStatusLabelAttribute(): string
    {
        return OrderStatus::getLabel($this->status);
    }

    /**
     * Impuesto de la orden
     */
    const TAX = 16;

    /**
     * Devuelve el usuario al que pertenece el pedido
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Devuelve los productos del pedido
     *
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('quantity');
    }

    /**
     * Devuelve los logs de cada orden generada
     *
     * @return MorphMany
     */
    public function logs(): MorphMany
    {
        return $this->morphMany(Log::class, 'loggable');
    }
}
