<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'title' => $this->title,
            'author' => $this->user->name,
            'categories' => $this->categories->pluck('title'),
            'img' => $this->img,

        ];
    }
}
