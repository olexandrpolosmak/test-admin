<x-base-layout>
    <x-header/>
    <div class="flex">
        <x-sidebar/>
        <div class="absolute top-16 left-64 right-0 z-30">
            <div class="w-full">
                {{ $slot }}
            </div>

        </div>
    </div>

</x-base-layout>
