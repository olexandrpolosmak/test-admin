<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AppToken;
use App\Models\Company;
use App\Models\Item;
use App\Models\Notification;
use App\Models\NotificationCampaign;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $this->createUsers();

            $appTokens = $this->createAppTokens();
            $campaigns = $this->createNotificationCampaigns();
            $this->createNotifications($campaigns, $appTokens);

            $companies = $this->createCompanies();
            foreach ($companies as $company) {
                $this->createCompanyItems($company);
            }
    }

    private function createUsers(int $count = 20): Collection
    {
        return User::factory($count)->create();
    }

    /**
     * @param int $count
     * @return Collection<AppToken>
     */
    private function createAppTokens(int $count = 20): Collection
    {
        return AppToken::factory($count)->create();
    }

    /**
     * @param int $count
     * @return Collection<NotificationCampaign>
     */
    private function createNotificationCampaigns(int $count = 5): Collection
    {
        return NotificationCampaign::factory($count)->create();
    }

    /**
     * @param Collection<NotificationCampaign> $campaigns
     * @param Collection<AppToken> $appTokens
     * @return void
     */
    private function createNotifications(Collection $campaigns, Collection $appTokens): void
    {
        foreach ($campaigns as $campaign) {
            foreach ($appTokens as $appToken) {
                Notification::factory()->create([
                    'notification_campaign_id' => $campaign->id,
                    'app_token_id' => $appToken->id,
                ]);
            }
        }
    }

    /**
     * @param int $count
     * @return Collection<Company>
     */
    private function createCompanies(int $count = 5): Collection
    {
        return Company::factory($count)->create();
    }

    /**
     * @param Company $company
     * @param int $count
     * @return Collection<Item>
     */
    private function createCompanyItems(Company $company, int $count = 10): Collection
    {
        return Item::factory($count)->create([
            'company_id' => $company->id,
        ]);
    }
}
