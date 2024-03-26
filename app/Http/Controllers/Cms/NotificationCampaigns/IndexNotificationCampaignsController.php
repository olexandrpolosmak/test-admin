<?php
/**
 * Description of IndexNotificationCampaignsController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\NotificationCampaigns;


use App\Http\Controllers\Controller;
use App\Models\NotificationCampaign;
use Illuminate\View\View;

class IndexNotificationCampaignsController extends Controller
{
    public function __invoke(): View
    {
        $campaigns = NotificationCampaign::all();
        return view('notification-campaigns.index', [
            'notificationCampaigns' => $campaigns
        ]);
    }
}
