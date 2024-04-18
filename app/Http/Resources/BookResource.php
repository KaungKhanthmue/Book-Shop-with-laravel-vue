<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {   
        return [
            'id' =>$this->id,
            'title' =>$this->title,
            'descritpiton' =>$this->description,
            'price' =>(int)$this->price,
            'category' =>$this->categories['name'],
            'tag'  =>$this->tags['name'],
            'images' => ImageResource::collection($this->images),
            'likecount' => $this->bookLike->count()

        ];
    }
}
