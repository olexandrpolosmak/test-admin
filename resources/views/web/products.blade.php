@php
/** @var \Illuminate\Support\Collection $items */

@endphp
<x-base-layout>
    <a href="{{route('web.index')}}" class="">
        <x-web.header/>
        <div class="mt-16 text-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white"> Example of simple web</h1>
        </div>
        <div class="flex gap-4 items-center justify-center flex-wrap">

          @foreach($items as $item)
              <x-web.items.card
                    name="{{$item->name}}"
                    price="{{$item->price}}"
                    description="{{$item->getDesc}}"
                />
          @endforeach

        </div>
    </a>


</x-base-layout>
