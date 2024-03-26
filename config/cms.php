<?php

use App\Models\Company;
use App\Models\NotificationCampaign;
use App\Models\User;

return [
    'users' => [
        'levels' => [
            User::LEVEL_USER => 'Simple',
            User::LEVEL_MODERATOR => 'Moderator',
            User::LEVEL_ADMIN => 'Admin',
        ],
        'statuses' => [
            User::STATUS_ACTIVE => 'Active',
            User::STATUS_INACTIVE => 'Inactive',
            User::STATUS_BANNED => 'Banned',
        ],
    ],

    'companies' => [
        'statuses' => [
            Company::STATUS_ACTIVE => 'Active',
            Company::STATUS_INACTIVE => 'Inactive',
            Company::STATUS_SOON => 'Soon',
        ],
    ],

    'notification-campaigns' => [
        'types' => [
            NotificationCampaign::TYPE_PUSH => 'Push',
        ],
        'statuses' => [
            NotificationCampaign::STATUS_DRAFT => 'Draft',
            NotificationCampaign::STATUS_APPROVED => 'Approved',
            NotificationCampaign::STATUS_PROCESSING => 'Processing',
            NotificationCampaign::STATUS_FINISHED => 'Finished',
            NotificationCampaign::STATUS_DECLINED => 'Declined',
        ],
        'editStatuses' => [
            NotificationCampaign::STATUS_DRAFT => 'Draft',
            NotificationCampaign::STATUS_APPROVED => 'Approved',
        ],
    ],
];
