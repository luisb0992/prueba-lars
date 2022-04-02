<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    /**
     * La tabla asociada al modelo
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * Los atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'process',
        'message',
        'loggable_id',
        'loggable_type',
    ];

    /**
     * Devuelve el loggable
     *
     * @return BelongsTo
     */
    public function loggable(): BelongsTo
    {
        return $this->morphTo();
    }
}
