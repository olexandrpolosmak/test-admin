<?php
/**
 * Description of CreateNotificationCampaignController.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Http\Controllers\Cms\NotificationCampaigns;


use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateNotificationCampaignController extends Controller
{
    public function __invoke(): View
    {
        return view('notification-campaigns.create');
    }
}
