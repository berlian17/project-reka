<?php

namespace App\Providers;

use App\Models\IndustrialType;
use App\Models\Service;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
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
        try {
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

        } catch (\Illuminate\Database\QueryException $e) {
            // Log error database connection
            Log::error('Database connection failed in AppServiceProvider', [
                'error' => $e->getMessage(),
                'code'  => $e->getCode()
            ]);

            // Set default values agar aplikasi tidak crash
            view()->share([
                'appSettings'           => null,
                'appServices'           => collect([]),
                'statisticYears'        => 0,
                'statisticIndustries'   => 0
            ]);
        } catch (\Exception $e) {
            // Handle exception lainnya
            Log::error('Error in AppServiceProvider boot', [
                'error' => $e->getMessage()
            ]);

            view()->share([
                'appSettings'           => null,
                'appServices'           => collect([]),
                'statisticYears'        => 0,
                'statisticIndustries'   => 0
            ]);
        }
    }
}
