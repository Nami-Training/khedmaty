<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'code' => $this->code,
            'price' => $this->price,
            'type' => $this->type,
            'category_id' => $this->category_id,
            'store_id' => $this->store_id,
            'department_id' => $this->department_id,
            'offer_id' => $this->offer_id,
            'order_products_count' => $this->order_products_count,
            'image' => asset($this->images[0]->image)
        ];
    }
}
