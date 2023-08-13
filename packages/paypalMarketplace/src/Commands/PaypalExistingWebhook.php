<?php

namespace Incevio\Package\PaypalMarketplace\Commands;

use Illuminate\Console\Command;
use PayPalHttp\HttpRequest;
use Incevio\Package\PaypalMarketplace\Http\Requests\PaypalClientRequest;

class PaypalExistingWebhook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paypal:webhooks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show list of configured webhooks.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param \PaypalMerchant\Services\PaypalClientRequest $clientService
     *
     * @return int
     */
    public function handle(PaypalClientRequest $clientService)
    {
        $paypalRequest = new HttpRequest('/v2/notifications/webhooks', 'GET');
        $response = $clientService->execute($paypalRequest);

        if ($response->statusCode != 200) {
            $this->error('Something is wrong while showing list of webhooks');
            return 1;
            // return Command::FAILURE;
        }

        foreach ($response->result->webhooks as $webhook) {
            $this->info($webhook->url);
            $this->line('Event Types:');

            foreach ($webhook->event_types as $eventType) {
                $this->line(' -> ' . $eventType->name . ' [' . $eventType->status . ']');
            }
        }

        return 0;
        // return Command::SUCCESS;
    }
}
