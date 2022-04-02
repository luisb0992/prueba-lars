<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Order extends Model
{

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
        return $this->belongsToMany(Product::class, 'order_products');
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
