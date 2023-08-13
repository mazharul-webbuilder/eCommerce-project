<?php

namespace Incevio\Package\AuthorizeNet\Services;

use App\Exceptions\PaymentFailedException;
use App\Services\Payments\PaymentService;
use Illuminate\Http\Request;
use net\authorize\api\constants\ANetEnvironment;
use net\authorize\api\contract\v1 as AuthorizeNetAPI;
use net\authorize\api\controller as AuthorizeNetController;

class AuthorizeNetPaymentService extends PaymentService
{
    public $refId;
    public $apiRequest;

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->refId = 'ref' . time();
    }

    /**
     * Set payment gateway config
     */
    public function setConfig()
    {

        if ($this->receiver == 'merchant') {
            // Get the vendor configs
            $vendorConfig = $this->order->shop->config->authorizeNet;

            $api_login_id = $vendorConfig->api_login_id;
            $transaction_key = $vendorConfig->transaction_key;
            $this->sandbox = $vendorConfig->sandbox == 1;
        } else {
            $api_login_id = config('authorizenet.api_login_id');
            $transaction_key = config('authorizenet.transaction_key');
            $this->sandbox = config('authorizenet.sandbox');
        }

        // Common setup for API credentials
        $merchantAuthentication = new AuthorizeNetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName($api_login_id);
        $merchantAuthentication->setTransactionKey($transaction_key);

        // Create the payment data for a credit card
        $creditCard = new AuthorizeNetAPI\CreditCardType();
        $creditCard->setCardNumber($this->request->cnumber);
        // $creditCard->setExpirationDate( "2038-12");
        $expiry = $this->request->card_expiry_year . '-' . $this->request->card_expiry_month;
        $creditCard->setExpirationDate($expiry);

        $paymentOne = new AuthorizeNetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        // Create a transaction
        $transactionRequestType = new AuthorizeNetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType('authCaptureTransaction');
        $transactionRequestType->setAmount($this->amount);
        $transactionRequestType->setPayment($paymentOne);

        $ApiRequest = new AuthorizeNetAPI\CreateTransactionRequest();
        $ApiRequest->setMerchantAuthentication($merchantAuthentication);
        $ApiRequest->setRefId($this->refId);
        $ApiRequest->setTransactionRequest($transactionRequestType);

        $this->apiRequest = $ApiRequest;

        return $this;
    }

    /**
     * Execute payment
     */
    public function charge()
    {
        $controller = new AuthorizeNetController\CreateTransactionController($this->apiRequest);
        $response = $controller->executeWithApiResponse($this->sandbox ? ANetEnvironment::SANDBOX : ANetEnvironment::PRODUCTION);

        if ($response != null) {
            $tresponse = $response->getTransactionResponse();

            if (($tresponse != null) && ($tresponse->getResponseCode() == '1')) {

                // Approved
                if ($this->order) {
                    if (is_array($this->order)) {
                        foreach ($this->order as $key => $order) {
                            $this->order[$key]->payment_ref_id = $tresponse->getTransId();
                        }
                    } else {
                        $this->order->payment_ref_id = $tresponse->getTransId();
                    }
                }

                $this->status = self::STATUS_PAID;

                return $this;
            }
        }

        $this->status = self::STATUS_ERROR;

        \Log::error('Authorize Net Exception:: ' . json_encode($response));

        throw new PaymentFailedException(trans('theme.notify.payment_failed'));

        return $this;
    }
}
