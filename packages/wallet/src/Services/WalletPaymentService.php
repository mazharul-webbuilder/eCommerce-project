<?php

namespace Incevio\Package\Wallet\Services;

use App\Services\Payments\PaymentService;
use App\Exceptions\PaymentFailedException;
use Incevio\Package\Wallet\Exceptions\AmountInvalid;
use Incevio\Package\Wallet\Services\CommonService as WalletService;

class WalletPaymentService extends PaymentService
{
	public function charge()
	{
		// When using oneCheckout
		if (is_array($this->order)) {
			$order_numbers = implode(', ', array_column($this->order, 'order_number'));
			$desc = trans('wallet::lang.purchase_of', ['order_numbers' => $order_numbers]);
			$shop_wallet = $this->order[0]->shop->wallet;
		} else {
			$desc = trans('wallet::lang.purchase_of', ['order_numbers' => $this->order->order_number]);
			$shop_wallet = $this->order->shop->wallet;
		}

		$meta = [
			'type' => 'transfer',
			'description' => $desc
		];

		// Wallet check
		if (!isset($this->payee->wallet) || !isset($shop_wallet)) {
			throw new AmountInvalid();
		}

		try {
			$wallet = new WalletService();
			$wallet->verifyWithdraw($this->payee->wallet, $this->amount);
			$wallet->forceWithdraw($this->payee->wallet, $this->amount, $meta);

			$this->status = self::STATUS_PAID;
		} catch (\Exception $e) {
			throw new PaymentFailedException($e->getMessage());
		}

		return $this;
	}
}
