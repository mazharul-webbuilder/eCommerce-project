<?php

namespace Incevio\Package\Wallet\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
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
            'balance' => get_formated_currency($this->balance, config('system_settings.decimals', 2)),
            'balance_raw' => $this->balance,
        ];
    }
}
