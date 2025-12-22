<?php

namespace App\Http\Controllers;

use App\Models\IndustrialType;
use App\Models\Project;
use App\Models\Service;
use Carbon\Carbon;

class PageController extends Controller
{
    public function home()
    {
        $statisticYears = Carbon::now()->year - 2007;
        $statisticProjects = Project::count();
        $statisticIndustries = IndustrialType::whereNull('deleted_at')->count();
        
        $services = Service::where('status', 1)
            ->take(3)
            ->get();
        $projects = Project::where('status', 1)
            ->get()
            ->shuffle()
            ->values()
            ->take(3);

        return view('pages.home', compact(
            'statisticYears',
            'statisticProjects',
            'statisticIndustries',
            'services',
            'projects'
        ));
    }

    public function about()
    {
        $statisticYears = Carbon::now()->year - 2007;
        $statisticProjects = Project::count();
        $statisticIndustries = IndustrialType::whereNull('deleted_at')->count();

        return view('pages.about', compact(
            'statisticYears',
            'statisticProjects',
            'statisticIndustries'
        ));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
