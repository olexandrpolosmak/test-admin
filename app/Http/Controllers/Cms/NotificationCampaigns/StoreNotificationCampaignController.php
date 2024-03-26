<?php
/**
 * Description of StoreNotificationCampaignController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\NotificationCampaigns;


use App\Http\Controllers\Cms\NotificationCampaigns\Requests\FormNotificationCampaignRequest;
use App\Http\Controllers\Controller;
use App\Models\NotificationCampaign;
use Illuminate\Http\RedirectResponse;

class StoreNotificationCampaignController extends Controller
{
    public function __invoke(FormNotificationCampaignRequest $request): RedirectResponse
    {
        $campaign = NotificationCampaign::create(
            $request->getData(),
        );

        return redirect()->route('notification-campaigns.edit', [
            'notificationCampaign' => $campaign->id,
        ]);
    }
}
