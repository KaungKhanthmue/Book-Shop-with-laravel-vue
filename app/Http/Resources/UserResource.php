<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'profile_image' =>  ImageResource::collection($this->images->whereIn('image_type',['profile_photo'])),
            'cover_photo' => ImageResource::collection($this->images->whereIn('image_type',['cover_photo'])),
        ];
    }
}
