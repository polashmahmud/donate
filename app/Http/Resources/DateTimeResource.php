<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DateTimeResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'human' => $this->diffForHumans(),
            'bd_date' => $this->format('d F, Y'),
            'full' => $this->format('d F, Y h:i A'),
        ];
    }
}
