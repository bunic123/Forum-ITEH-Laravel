<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClanResurs extends JsonResource
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
            'IME I PREZIME - ' => $this->resource->imePrezime,
            'USERNAME - ' => $this->resource->username,
            'EMAIL - ' => $this->resource->email,
            'FORUM - ' => new ForumResurs($this->resource->forum),
        ];
    }
}
