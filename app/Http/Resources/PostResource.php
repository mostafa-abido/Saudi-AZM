<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category->name,
             'content' => substr($this->content, 0, 50) . '...',
        ];

        if ($this->created_at) {
            $data['created_at'] = $this->created_at->toDateString();
        } else {
            $data['created_at'] = null; // Or any other default value
        }

        return $data;

    }
}
