<?php

namespace App\Listerners;

use App\Events\NewOrderNotificationEvent;
use App\Mail\NewOrderNotificationEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class NewOrderNotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewOrderNotificationEvent  $event
     * @return void
     */
    public function handle(NewOrderNotificationEvent $event)
    {
        $email = Auth::user()->email;

        if ($email) {
            Mail::to($email)
                ->send(new NewOrderNotificationEmail($event->order));
        }
    }
}
