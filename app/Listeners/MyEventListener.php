<?php

namespace App\Listeners;

use App\Events\NewOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MyEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewOrderEvent $event): void
    {
        toastr($event->message, 'success');
    }
}