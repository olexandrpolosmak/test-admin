<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
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
        $accounts = Account::factory(10)->create();
        foreach ($accounts as $account) {
            $this->createUsers($account);

            $appTokens = $this->createAppTokens($account);
            $campaigns = $this->createNotificationCampaigns($account);
            $this->createNotifications($campaigns, $appTokens);

            $companies = $this->createCompanies($account);
            foreach ($companies as $company) {
                $this->createCompanyItems($company);
            }
        }
    }

    private function createUsers(Account $account, int $count = 20): Collection
    {
        return User::factory($count)->create([
            'account_id' => $account->id,
        ]);
    }

    /**
     * @param Account $account
     * @param int $count
     * @return Collection<AppToken>
     */
    private function createAppTokens(Account $account, int $count = 20): Collection
    {
        return AppToken::factory($count)->create([
            'account_id' => $account->id,
        ]);
    }

    /**
     * @param Account $account
     * @param int $count
     * @return Collection<NotificationCampaign>
     */
    private function createNotificationCampaigns(Account $account, int $count = 5): Collection
    {
        return NotificationCampaign::factory($count)->create([
            'account_id' => $account->id,
        ]);
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
                    'account_id' => $campaign->account_id,
                    'notification_campaign_id' => $campaign->id,
                    'app_token_id' => $appToken->id,
                ]);
            }
        }
    }

    /**
     * @param Account $account
     * @param int $count
     * @return Collection<Company>
     */
    private function createCompanies(Account $account, int $count = 5): Collection
    {
        return Company::factory($count)->create([
            'account_id' => $account->id,
        ]);
    }

    /**
     * @param Company $company
     * @param int $count
     * @return Collection<Item>
     */
    private function createCompanyItems(Company $company, int $count = 10): Collection
    {
        return Item::factory($count)->create([
            'account_id' => $company->account_id,
            'company_id' => $company->id,
        ]);
    }
}
