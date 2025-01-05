<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Project */
class ProjectResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'sort_description' => substr($this->description, 0, 320),
            'description' => $this->description,
            'goal_amount' => $this->goal_amount,
            'raised_amount' => $this->raised_amount,
            'status' => $this->status,
            'start_date' => DateTimeResource::make($this->start_date),
            'end_date' => DateTimeResource::make($this->end_date),
            'created_by' => $this->created_by,
        ];
    }
}
