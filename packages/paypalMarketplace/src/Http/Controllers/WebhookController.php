<?php


namespace Incevio\Package\PaypalMarketplace\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Incevio\Package\PaypalMarketplace\Services\WebhookHandlerService;
use Incevio\Package\PaypalMarketplace\Events\PaypalWebhookNotificationEvent;

class WebhookController extends Controller
{
    /**
     * @var \Incevio\Package\PaypalMarketplace\Services\WebhookHandlerService
     */
    protected $webhoodHandler;

    /**
     * WebhookController constructor.
     *
     * @param \Incevio\Package\PaypalMarketplace\Services\WebhookHandlerService $webhoodHandler
     */
    public function __construct(WebhookHandlerService $webhoodHandler)
    {
        $this->webhoodHandler = $webhoodHandler;
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function index(Request $request)
    {
        Log::channel('webhook')->info('Webhook Request From PayPal Marketplace:');
        Log::channel('webhook')->info($request->all());

        try {
            if ($this->webhoodHandler->verify($request)) {
                event(new PaypalWebhookNotificationEvent($request->get('event_type'), $request->get('resource')));
            } else {
                Log::channel('webhook')->error('Unauthorized webhook call from PayPal.');
            }
        } catch (\Exception $exception) {
            Log::channel('webhook')->error($exception->getMessage());
        }

        return response()->json();
    }
}
