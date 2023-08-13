<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'nice_name' => $this->nice_name,
            'role'      => $this->role->name,
            'role_id'   => $this->role_id,
            'email'     => $this->email,
            'dob' => $this->dob ? date('F j, Y', strtotime($this->dob)) : null,
            'sex'       => get_formated_gender($this->sex, false),
            'description' => $this->description,
            'member_since' => $this->created_at,
            'avatar' => get_avatar_src($this, 'small'),
            "active"    => (bool) $this->active,
            'shop'      => new ShopLightResource($this->shop),
            "read_announcements_at" => $this->read_announcements_at ? date('F j, Y', strtotime($this->read_announcements_at)) : null,
            "email_verified_at" => $this->email_verified_at ? date('F j, Y', strtotime($this->email_verified_at)) : null,
            "last_visited_from" => $this->last_visited_from,
            "last_visited_at"   => $this->last_visited_at ? date('F j, Y', strtotime($this->last_visited_at)) : null,
        ];
    }
}
