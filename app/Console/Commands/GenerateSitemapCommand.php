<?php
/**
 * Description of GenerateSitemapCommand.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Console\Commands;


use App\Models\Company;
use App\Models\NotificationCampaign;
use App\Models\User;
use App\Services\Sitemap\GenerateSitemapHandler;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapCommand extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap';

    private function getGenerateSitemapHandler(): GenerateSitemapHandler
    {
        return app(GenerateSitemapHandler::class);
    }

    public function handle(): void
    {
        $this->getGenerateSitemapHandler()->handle();
    }
}
