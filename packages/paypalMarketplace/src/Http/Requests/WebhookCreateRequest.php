<?php

namespace Incevio\Package\PaypalMarketplace\Http\Requests;

use PayPalHttp\HttpRequest;

class WebhookCreateRequest extends HttpRequest
{
    public function __construct()
    {
        parent::__construct('/v2/notifications/webhooks', 'POST');

        $this->headers["Content-Type"] = "application/json";
    }

    /**
     * @param $url
     *
     * @return $this
     * @throws \Exception
     */
    public function setUrl($url): self
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \Exception('Invalid URL: ' . $url);
        }

        $this->body['url'] = $url;

        return $this;
    }

    /**
     * @param array $eventTypes
     *   [
     *   [
     *   name => "PAYMENT.AUTHORIZATION.CREATED"
     *   ],
     *   [
     *   name => "PAYMENT.CAPTURE.COMPLETED"
     *   ]
     *   ]
     */
    public function setEventTypes(array $eventTypes)
    {
        $events = [];

        foreach ($eventTypes as $eventType) {
            $events[] = [
                'name' => $eventType,
            ];
        }

        $this->body['event_types'] = $events;
    }
}
