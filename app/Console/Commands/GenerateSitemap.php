<?php

namespace App\Console\Commands;

use App\Http\Controllers\PageController;
use Illuminate\Console\Command;

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
        
        try {
            $controller = new PageController();
            $xml = $controller->generateSitemap();
            
            $filePath = storage_path('app/public/sitemap.xml');
            file_put_contents($filePath, $xml);
            
            $this->info('Sitemap generated successfully at: ' . $filePath);
            $this->info('File size: ' . number_format(filesize($filePath) / 1024, 2) . ' KB');
            
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
