<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryGroupResource extends JsonResource
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
            'slug' => $this->slug,
            'description' => $this->description,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'active' => (bool) $this->active,
            'order' => $this->order,
            'icon' => $this->icon,
            'icon_image' => $this->iconImage ? get_icon_url($this) : null,
            'cover_image' => get_cover_img_src($this, 'category'),
            'background_image' => $this->backgroundImage ? get_storage_file_url(optional($this->backgroundImage)->path, 'medium') : null,
        ];
    }
}
