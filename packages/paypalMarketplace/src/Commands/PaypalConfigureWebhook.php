<?php

namespace Incevio\Package\PaypalMarketplace\Commands;

use Illuminate\Console\Command;
use Incevio\Package\PaypalMarketplace\Http\Requests\WebhookCreateRequest;
use Incevio\Package\PaypalMarketplace\Http\Requests\PaypalClientRequest;

class PaypalConfigureWebhook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paypal:configure-webhook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure paypal marketplace webhooks';

    /**
     * Execute the console command.
     *
     * @param \PaypalMerchant\Http\Requests\PaypalClientRequest $httpClient
     *
     * @return int
     * 
     * @throws \Exception
     */
    public function handle(PaypalClientRequest $httpClient)
    {
        $events = [
            'MERCHANT.ONBOARDING.COMPLETED',
            'MERCHANT.PARTNER-CONSENT.REVOKED',
            'PAYMENT.CAPTURE.COMPLETED',
            'PAYMENT.CAPTURE.DENIED',
            'PAYMENT.CAPTURE.PENDING',
            'PAYMENT.CAPTURE.REFUNDED',
            'PAYMENT.CAPTURE.REVERSED',
        ];

        $webhookRequest = new WebhookCreateRequest();

        $webhookRequest->setUrl(route('paypalMarketplace.webhook'))
            ->setEventTypes($events);

        $response = $httpClient->execute($webhookRequest);

        if ($response->statusCode !== 201) {
            $this->error('Unaable to configure your URL.');

            return 1;
            // return Command::FAILURE;
        }
        $this->info('Successfully configured your URL');
        $this->line('URL: ' . $response->result->url);
        $this->line('Event Types');

        foreach ($response->result->event_types as $eventType) {
            $this->line(' -> ' . $eventType->name);
        }

        $this->info('webhook id: ' . $response->result->id);
        $this->line('Please configure this id into your .env file as ');
        $this->line('PAYPAL_WEBHOOK_ID=' . $response->result->id);

        return 0;
        // return Command::SUCCESS;
    }
}
