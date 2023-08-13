<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductLightResource extends JsonResource
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
            'slug' => $this->slug,
            'name' => $this->name,
            'model_number' => $this->model_number,
            'gtin' => $this->gtin,
            'gtin_type' => $this->gtin_type,
            'mpn' => $this->mpn,
            'brand' => $this->brand,
            'available_from' => date('F j, Y', strtotime($this->created_at)),
            'image' => get_catalog_featured_img_src($this, 'small'),
        ];
    }
}
