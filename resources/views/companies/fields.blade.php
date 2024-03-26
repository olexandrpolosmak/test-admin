@php
    use App\Models\Company;
          /** @var \App\Models\Company|null $company */

    $company = $company ?? null;
    $title = $company ? 'Company edit': 'Company create';
    $url = $company ? route('companies.update', ['company' => $company->id]) : route('companies.store');
    $method = $company ? 'PUT' : 'POST';
@endphp
    <x-form.form
        title="{{$title}}"
        url="{{$url}}"
        method="{{$method}}"
    >
        <x-form.inputs.input type="text" name="name" label="Name" required value="{{$company?->name}}"/>
        <x-form.inputs.input type="tel" name="ownerPhone" label="Owner Phone" placeholder="+38" value="{{$company?->getOwnerPhone()}}"/>
        <x-form.inputs.input type="tel" name="ownerName" label="Owner Name" value="{{$company?->getOwnerName()}}"/>
        <x-form.inputs.select name="status" label="Status" :options="config('cms.companies.statuses')" required
                              value="{{$company?->status}}"/>
        <x-form.inputs.textarea name="description" label="Description" value="{!!$company?->getDescription() !!}"/>
    </x-form.form>
