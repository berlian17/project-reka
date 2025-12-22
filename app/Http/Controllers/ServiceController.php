<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::where('status', 1)
            ->paginate(9)
            ->withQueryString();

        if ($request->ajax()) {
            return view('pages.services.partials.list', compact('services'))->render();
        }

        return view('pages.services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('pages.services.show', compact('service'));
    }
}
