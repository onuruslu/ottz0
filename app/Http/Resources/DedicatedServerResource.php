<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\DedicatedServer */
class DedicatedServerResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'type' => $this->type,
            'processor_line_1' => $this->processor_line_1,
            'processor_line_2' => $this->processor_line_2,
            'memory' => $this->memory,
            'storage_line_1' => $this->storage_line_1,
            'storage_line_2' => $this->storage_line_2,
            'data' => $this->data,
            'benchmark' => $this->benchmark,
            'product' => ProductResource::make($this->whenLoaded('product')),
        ];
    }
}
