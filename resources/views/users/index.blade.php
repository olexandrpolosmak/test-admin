@php
    /** @var Collection $users*/

 use Illuminate\Support\Collection;
 $levels = config('cms.users.levels');
 $items = $users->map(function ($user) use ($levels) {
     return [
         'name' => $user->name,
         'email' => $user->email,
          'status' => $user->email,
           'level' => $levels[$user->level],
          'action' => [
          'name' => 'Edit',
           'url' => route('users.edit', ['user' => $user->id])
        ]
     ];
 });
@endphp
<x-layout>
    <x-table
        :headers="['Name', 'Email', 'Status', 'Level', '']"
        :items="$items"
    >

    </x-table>

</x-layout>


