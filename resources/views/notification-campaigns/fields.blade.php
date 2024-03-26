@php
    use App\Models\Company;
          /** @var \App\Models\NotificationCampaign|null $notificationCampaign */

    $notificationCampaign = $notificationCampaign ?? null;
    $title = $notificationCampaign ? 'Notification campaign edit': 'Notification campaign create';
    $url = $notificationCampaign ? route('notification-campaigns.update', ['notificationCampaign' => $notificationCampaign->id]) : route('notification-campaigns.store');
    $method = $notificationCampaign ? 'PUT' : 'POST';
    $image = \App\Services\Helpers\Image::publicPath($notificationCampaign?->getImage());

@endphp
    <x-form.form
        title="{{$title}}"
        url="{{$url}}"
        method="{{$method}}"
    >
        <x-form.inputs.input type="text" name="name" label="Name" required value="{{$notificationCampaign?->name}}"/>
        <x-form.inputs.select name="status" label="Status" :options="config('cms.notification-campaigns.editStatuses')" required
                              value="{{$notificationCampaign?->status}}"
                              disabled="{{  $notificationCampaign?->isApproved()}}"
        />
        <x-form.inputs.select name="type" label="Type" :options="config('cms.notification-campaigns.types')" required
                              value="{{$notificationCampaign?->type}}"/>

        <x-form.inputs.datepicker type="text" name="sending_time" label="Sending time" required value="{{$notificationCampaign?->sending_time ? \Carbon\Carbon::createFromTimestamp($notificationCampaign->sending_time)->format('Y-m-d') : null}}"/>
        <x-form.inputs.input type="text" name="title" label="Title" required value="{{$notificationCampaign?->getTitle()}}"/>
        <x-form.inputs.input type="text" name="buttonText" label="Button text" required value="{{$notificationCampaign?->getButtonText()}}"/>
        <x-form.inputs.input type="text" name="buttonLink" label="Button link" required value="{{$notificationCampaign?->getButtonLink()}}"/>
        <x-form.inputs.image type="text" name="image" label="Image" required value="{{$image}}"/>
        <x-form.inputs.textarea name="description" label="Description" value="{{$notificationCampaign?->getDescription()}}"/>
    </x-form.form>
