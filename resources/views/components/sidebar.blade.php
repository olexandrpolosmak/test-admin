@php
    use App\Models\User;$sidebarItems = [
        [
            'name' => 'Dashboard',
            'url' => route('dashboard'),
            'levels' => [User::LEVEL_ADMIN, User::LEVEL_USER, User::LEVEL_MODERATOR],
],
        [
            'name' => 'Users',
            'url' => route('users.index'),
             'levels' => [User::LEVEL_ADMIN],
],
 [
            'name' => 'Companies',
            'url' => route('companies.index'),
             'levels' => [User::LEVEL_ADMIN, User::LEVEL_MODERATOR],
],
        [
            'name' => 'Notification campaigns',
            'url' => route('notification-campaigns.index'),
             'levels' => [User::LEVEL_ADMIN, User::LEVEL_MODERATOR, User::LEVEL_USER],
],
];
@endphp
<aside id="logo-sidebar"
       class="fixed top-0 left-0 z-10 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
       aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            @foreach($sidebarItems as $item)
                @if(!in_array(auth()->user()?->level, $item['levels'] ?? []))
                    @continue;
                @endif
                <x-sidebar-item :name="$item['name']" :url="$item['url']"/>
            @endforeach
        </ul>
    </div>
</aside>
