<?php
/**
 * Description of GenerateSitemapHandler.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Sitemap;


use App\Models\Company;
use App\Models\NotificationCampaign;
use App\Models\User;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapHandler
{
    private ?Sitemap $sitemap = null;

    public function handle(): void
    {
        $this->sitemap = Sitemap::create();
        $this->addUsers();
        $this->addCompanies();
        $this->addNotificationCampaigns();
        $this->addAuthRoutes();
        $this->sitemap->writeToFile(public_path('sitemap.xml'));
    }

    private function addUsers(): void
    {
        $users = User::limit(50)->get();
        foreach ($users as $user) {
            $this->addUrlToSitemap(
                route('users.edit', $user->id),
                0.8,
            );
        }
    }

    private function addCompanies(): void
    {
        $companies = Company::limit(100)->get();
        foreach ($companies as $company) {
            $this->addUrlToSitemap(
                route('companies.edit', $company->id),
                0.8,
            );
        }
    }

    private function addNotificationCampaigns(): void
    {
        $campaigns = NotificationCampaign::limit(100)->get();
        foreach ($campaigns as $campaign) {
            $this->addUrlToSitemap(
                route('notification-campaigns.edit', $campaign->id),
                0.8,
            );
        }
    }

    private function addAuthRoutes(): void
    {
        $this->addUrlToSitemap(
            route('auth.signIn'),
            1,
        );

        $this->addUrlToSitemap(
            route('auth.account.login'),
            1,
        );
    }

    private function addUrlToSitemap(
        string $url,
        float $priority,
    ): void {
        $this->sitemap->add(
            Url::create($url)
                ->setPriority($priority)
                ->setLastModificationDate(Carbon::now()),
        );
    }
}
