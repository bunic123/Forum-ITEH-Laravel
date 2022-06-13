<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ForumResurs extends JsonResource
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
            'ID - ' => $this->resource->id,
            'URL - ' => $this->resource->url,
            'EMAIL - ' => $this->resource->email,
            'INSTAGRAM - ' => $this->resource->instagram,
            'OSNIVAC - ' => $this->resource->osnivac
        ];
    }
}
