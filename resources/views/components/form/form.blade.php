@props([
    'title',
    'url',
    'method' => 'POST'
])
<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-4 px-4 mx-auto ">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{$title}}</h2>
            @if($errors->any())
                @foreach($errors->getMessages() as $message)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">{{ $message[0] }}</span>
                    </div>
                @endforeach
            @endif
            <form action="{{$url}}" method="POST" enctype="multipart/form-data" _method="{{$method}}" class="w-full">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    {{$slot}}
                </div>
                <button type="submit" class="inline-flex  items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Save
                </button>
            </form>
        </div>
    </section>

</x-layout>
