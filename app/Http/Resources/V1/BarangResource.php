<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BarangResource extends JsonResource
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
            'idbarang' => $this->idbarang,
            'title' => $this->title,
            'category' => $this->category,
            'price' => $this->price,
            'stock' => $this->stock
        ];
    }
}
