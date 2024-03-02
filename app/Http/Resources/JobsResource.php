<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobsResource extends JsonResource
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
            'title' => $this->title,
            'company' => $this->company,
            'description' => $this->description,
            'type' => $this->type,
            'created_at' => date('d-m-Y', strtotime($this->created_at)),
            'created_time' => date('h:i:s', strtotime($this->created_at)),
            'updated_at' => date('d-m-Y', strtotime($this->updated_at)),
            'updated_time' => date('h:i:s', strtotime($this->updated_at))
        ];
    }
}
