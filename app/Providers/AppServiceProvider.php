<?php

namespace App\Providers;

use App\Models\IndustrialType;
use App\Models\Service;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $appSettings = Setting::first();
        $appServices = Service::select('title', 'slug', 'icon')
            ->where('status', 1)
            ->get();

        $statisticYears = Carbon::now()->year - 2007;
        $statisticIndustries = IndustrialType::whereNull('deleted_at')->count();

        view()->share([
            'appSettings'           => $appSettings,
            'appServices'           => $appServices,
            'statisticYears'        => $statisticYears,
            'statisticIndustries'   => $statisticIndustries
        ]);
    }
}
