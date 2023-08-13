<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategorySubGroupLightResource extends JsonResource
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
      'category_group_id' => $this->category_group_id,
      'name' => $this->name,
      'cover_image' => get_cover_img_src($this, 'category'),
      'categories_count' => $this->categories_count,
      'active' => (bool) $this->active,
    ];
  }
}
