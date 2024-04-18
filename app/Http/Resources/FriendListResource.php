<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FriendListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'profile_image' => new ImageResource($this->images->whereIn('image_type',['profile_photo'])->first()),
            'cover_photo' => new ImageResource($this->images->whereIn('image_type',['cover_photo'])->first()),
        ];
    }
}
