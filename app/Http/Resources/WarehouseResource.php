<?php

namespace App\Http\Resources;

use Google\Service\Analytics\UserRef;
use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'email'          => $this->email,
            'incharge'       => new StaffLightResource($this->manager),
            'description'    => $this->description,
            'opening_time'   => $this->opening_time,
            'closing_time'   => $this->closing_time,
            'business_days'  => $this->business_days,
            'primary_address' => new AddressResource($this->primaryAddress),
            'manager'        => $this->manager,
            'active'         => (bool) $this->active,
            'image'           => get_storage_file_url($this->image),
        ];
    }
}
