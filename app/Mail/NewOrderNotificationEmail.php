<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * La orden generada
     *
     * @var Order    La venta
     */
    public Order $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = __(':app le informa que se ha registrado una nueva orden', [
            'app'       => config('app.name'),
        ]);

        return $this->view('mail.sale-notification')->subject($subject);
    }
}
