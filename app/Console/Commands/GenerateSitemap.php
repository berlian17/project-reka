<?php

namespace App\Console\Commands;

use App\Http\Controllers\PageController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');
        Log::info('Sitemap generation started');
        
        try {
            $controller = new PageController();
            $xml = $controller->generateSitemap();
            
            $filePath = storage_path('app/public/sitemap.xml');
            file_put_contents($filePath, $xml);

            $sizeKb = round(filesize($filePath) / 1024, 2);
            
            $this->info("Sitemap generated successfully ({$sizeKb} KB)");
            Log::info('Sitemap generated successfully', [
                'path' => $filePath,
                'size_kb' => $sizeKb,
            ]);
            
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
            Log::error('Sitemap generation failed', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            return Command::FAILURE;
        }
    }
}
