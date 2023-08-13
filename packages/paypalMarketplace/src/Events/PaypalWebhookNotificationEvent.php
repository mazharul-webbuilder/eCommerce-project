<?php

namespace Incevio\Package\PaypalMarketplace\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaypalWebhookNotificationEvent
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var array|\stdClass
     */
    public $resource;

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @param  string $eventType
     * @param array $resource
     */
    public function __construct($eventType, $resource)
    {
        $this->eventType = $eventType;
        $this->resource = $resource;
    }
}
