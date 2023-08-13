<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategorySubGroupResource extends JsonResource
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
            'slug' => $this->slug,
            'description' => $this->description,
            'cover_image' => get_cover_img_src($this, 'category'),
            $this->mergeWhen($request->is('api/vendor/*'), [
                'parent_group' => [
                    'id' => $this->group->id,
                    'name' => $this->group->name,
                    'deleted_at' => $this->group->deleted_at,
                ],
            ]),
            'active' => (bool) $this->active,
        ];
    }
}
