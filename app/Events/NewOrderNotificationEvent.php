<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Queue\SerializesModels;

class NewOrderNotificationEvent
{
    use SerializesModels;

    /**
     * La venta recibida.
     *
     * @var Order    La venta
     */
    public Order $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
