<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Messages extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [$this->system_name => json_decode($this->text) ?? $this->text];

    }
}
