<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WarehouseLightResource extends JsonResource
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
      'incharge'       => $this->manager->getName(),
      'business_days'  => $this->business_days,
      'active'         => (bool) $this->active,
      'image'           => get_storage_file_url($this->image),
    ];
  }
}
