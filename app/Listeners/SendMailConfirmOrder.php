<?php

namespace App\Listeners;

use App\Events\CustomerOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Model\Bills;
use App\Model\Customer;
class SendMailConfirmOrder
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  CustomerOrder  $event
     * @return void
     */
    public function handle(CustomerOrder $event)
    {
       echo $event->bill->name;
    }
}
