<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'title'   => $this->title,
            'slug'    => $this->slug,
            'summary' => $this->summary,
            'image'   => $this->featured_image,
            'body'    => $this->body,
            'time'    => max(1, round(Str::wordCount(strip_tags($this->body)) / 200)),
            'date'    => optional($this->published_at)->format('d M Y'),
        ];
    }
}
