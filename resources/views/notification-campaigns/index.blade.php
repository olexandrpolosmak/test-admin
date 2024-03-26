@php
    /** @var Collection $notificationCampaigns */

 use Illuminate\Support\Collection;
 $statuses = config('cms.notification-campaigns.statuses');
  $types = config('cms.notification-campaigns.types');
 $items = $notificationCampaigns->map(function (App\Models\NotificationCampaign $notificationCampaign) use ($statuses, $types) {
     return [
         'name' => $notificationCampaign->name,
           'status' => $statuses[$notificationCampaign->status],
           'type' => $types[$notificationCampaign->type],
          'action' => [
          'name' => 'Edit',
           'url' => route('notification-campaigns.edit', ['notificationCampaign' => $notificationCampaign->id])
        ]
     ];
 });
@endphp
<x-layout>
    <x-table
        :headers="['Name', 'Status',  'Type', '']"
        :items="$items"
    >

    </x-table>

</x-layout>


