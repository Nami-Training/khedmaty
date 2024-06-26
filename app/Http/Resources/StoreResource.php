<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            "email" => $this->email,
            "country_code" => $this->country_code,
            "phone" => $this->phone,
            "password" => $this->password,
            "address" => $this->address,
            "image" => asset($this->image),
            "commercial_image" => asset($this->commercial_image),
            "store_category" => $this->store_category,
            "offer_status" => $this->offer_status,
            'orders' => OrderResource::collection($this->storeOrders)
        ];
    }
}
