<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::where('status', 1)
            ->orderBy('completion_date')
            ->paginate(9)
            ->withQueryString();

        if ($request->ajax()) {
            return view('pages.projects.partials.list', compact('projects'))->render();
        }

        return view('pages.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::with('galleries')
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();
        $relatedProjects = Project::where('status', 1)
            ->where('id', '!=', $project->id)
            ->get()
            ->shuffle()
            ->values()
            ->take(3);

        return view('pages.projects.show', compact(
            'project',
            'relatedProjects'
        ));
    }
}
