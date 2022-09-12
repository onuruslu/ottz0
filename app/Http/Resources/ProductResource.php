<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Product */
class ProductResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'tagline' => $this->tagline,
            'slug' => $this->slug,
            'dedicatedServers' => $this->whenLoaded('dedicated_servers'),
        ];
    }
}
