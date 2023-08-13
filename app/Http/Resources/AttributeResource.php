<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeResource extends JsonResource
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
            'attribute_type' => $this->attributeType,
            'values' => AttributeValueLightResource::collection($this->attributeValues),
            'categories' => CategoryResource::collection($this->categories),
            'order' => (int) $this->order,
        ];
    }
}
