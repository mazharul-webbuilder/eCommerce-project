<?php

namespace Incevio\Package\Wallet\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'date' => $this->created_at->toDayDateTimeString(),
            'description' => $this->meta['description'],
            'type'  => $this->type,
            'amount' => get_formated_currency($this->amount, config('system_settings.decimals', 2)),
            'amount_raw' => $this->amount,
            'balance' => get_formated_currency($this->balance, config('system_settings.decimals', 2)),
            'balance_raw' => $this->balance,
            // 'status' => $this->confirmed ? trans('wallet::lang.confirmed') : trans('wallet::lang.pending'),
            // 'approved' => (bool) $this->approved,
        ];
    }
}
