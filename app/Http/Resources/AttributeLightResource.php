<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AttributeLightResource extends JsonResource
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
            'attribute_type' => $this->attributeType->type,
            'entities_count' => $this->attribute_values_count,
            'categories_count' => $this->categories_count,
            'order' => (int) $this->order,
        ];
    }
}
