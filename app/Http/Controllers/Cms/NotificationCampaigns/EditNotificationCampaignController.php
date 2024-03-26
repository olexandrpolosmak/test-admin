<?php
/**
 * Description of EditNotificationCampaignController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\NotificationCampaigns;


use App\Http\Controllers\Controller;
use App\Models\NotificationCampaign;
use Illuminate\View\View;

class EditNotificationCampaignController extends Controller
{
    public function __invoke(string $id): View
    {
        $campaign = NotificationCampaign::findOrFail($id);

        return view('notification-campaigns.edit', [
            'notificationCampaign' => $campaign,
        ]);
    }

}
