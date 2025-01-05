<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;

class ProjectShowController extends Controller
{
    public function __invoke(Project $project)
    {
        return inertia('Projects/Show', [
            'project' => ProjectResource::make($project),
        ]);
    }
}
