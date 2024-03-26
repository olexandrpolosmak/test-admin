<?php
/**
 * Description of UpdateNotificationCampaignController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\NotificationCampaigns;


use App\Http\Controllers\Cms\NotificationCampaigns\Requests\FormNotificationCampaignRequest;
use App\Http\Controllers\Controller;
use App\Models\NotificationCampaign;
use Illuminate\Http\RedirectResponse;

class UpdateNotificationCampaignController extends Controller
{
    public function __invoke(FormNotificationCampaignRequest $request, string $id): RedirectResponse
    {
        $campaign = NotificationCampaign::findOrFail($id);
        $campaign->update(
            $request->getData($campaign),
        );

        return redirect()->route('notification-campaigns.edit', [
            'notificationCampaign' => $campaign->id,
        ]);
    }
}
