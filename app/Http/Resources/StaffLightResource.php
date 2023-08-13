<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class StaffLightResource extends JsonResource
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
      'name' => $this->getName(),
      'role_id' => $this->role_id,
      'email' => $this->email,
      'active' => $this->active,
      'avatar' => get_avatar_src($this, 'small'),
    ];
  }
}
