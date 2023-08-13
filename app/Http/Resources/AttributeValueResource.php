<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeValueResource extends JsonResource
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
            'id'           => $this->id,
            'value'        => $this->value,
            'color'        => $this->color,
            'attribute_id' => $this->attribute_id,
            'order'        => $this->order,
            'attribute' => new AttributeLightResource($this->attribute),
        ];
    }
}
