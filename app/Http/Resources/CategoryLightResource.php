<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryLightResource extends JsonResource
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
      'name' => $this->name,
      'featured' => (bool) $this->featured,
      'category_sub_group_id' => $this->category_sub_group_id,
      'feature_image' => get_storage_file_url(optional($this->featureImage)->path, 'medium'),
      'cover_image' => get_cover_img_src($this, 'category'),
    ];
  }
}
