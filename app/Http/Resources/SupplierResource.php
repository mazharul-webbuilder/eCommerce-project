<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
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
            'id'              => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'contact_person'  => $this->contact_person,
            'url'             => $this->url,
            'description'     => $this->description,
            'primaryAddress'  => new AddressResource($this->primaryAddress),
            'image'           => get_storage_file_url($this->image),
            'active'          => (bool) $this->active,
        ];
    }
}
