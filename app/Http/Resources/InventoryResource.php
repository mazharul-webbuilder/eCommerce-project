<?php

namespace App\Http\Resources;

use App\Helpers\ListHelper;
use Illuminate\Http\Resources\Json\JsonResource;

class InventoryResource extends JsonResource
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
            'id' => $this->id,
            'sku' => $this->sku,
            'title' => $this->title,
            'slug' => $this->slug,
            'condition' => $this->condition,
            'stock_quantity' => $this->stock_quantity,
            'sale_price' => $this->sale_price,
            'warehouse_id' => $this->warehouse_id,
            'product_id' => $this->product_id,
            'product' => new ProductLightResource($this->product),
            'brand' => $this->brand,
            'supplier_id' => $this->supplier_id,
            'condition_note' => $this->condition_note,
            'description' => $this->description,
            'key_features' => $this->key_features,
            'purchase_price' => $this->purchase_price,
            'offer_price' => $this->offer_price,
            'offer_start' => $this->offer_start,
            'offer_end' => $this->offer_end,
            'shipping_weight' => $this->shipping_weight,
            'min_order_quantity' => $this->min_order_quantity,
            'linked_items' => unserialize($this->linked_items),
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'inspection_status' => $this->inspection_status,
            'has_offer' => $this->hasOffer(),
            'free_shipping' => $this->free_shipping,
            'active' => $this->active,
            'images' => ImageResource::collection($this->images),
        ];
    }
}
