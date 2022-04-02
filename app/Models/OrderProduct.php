<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    /**
     * La tabla asociada al modelo order_product
     *
     * @var string
     */
    protected $table = 'order_products';

    /**
     * Los atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    /**
     * Devuelve el pedido al que pertenece el producto
     *
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Devuelve el producto del pedido
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
