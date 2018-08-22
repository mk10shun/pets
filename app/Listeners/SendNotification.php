<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;

use App\Events\DogCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotification
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
     * @param  DogCreated  $event
     * @return void
     */
    public function handle(DogCreated $event)
    {
        $message = $event->dog->name . " is a " . $event->dog->color
                        . " dog and he has just been added.";
        Log::info($message);
    }
}
