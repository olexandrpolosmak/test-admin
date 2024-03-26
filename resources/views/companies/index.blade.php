@php
    /** @var Collection $companies*/

 use Illuminate\Support\Collection;
 $statuses = config('cms.companies.statuses');
 $items = $companies->map(function (App\Models\Company $company) use ($statuses) {
     return [
         'name' => $company->name,
           'status' => $statuses[$company->status],
          'action' => [
          'name' => 'Edit',
           'url' => route('companies.edit', ['company' => $company->id])
        ]
     ];
 });
@endphp
<x-layout>
    <x-table
        :headers="['Name', 'Status',  '']"
        :items="$items"
    >

    </x-table>

</x-layout>


