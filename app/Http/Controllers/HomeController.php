<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;

class HomeController extends Controller
{
    public function __invoke()
    {
        $projects =ProjectResource::collection(Project::latest()->paginate(2));

        return inertia('Home', [
            'projects' => $projects
        ]);
    }
}
