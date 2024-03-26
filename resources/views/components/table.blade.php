<div class="overflow-x-auto shadow-md sm:rounded-lg p-2">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @foreach($headers as $header)

                <th scope="col" class="px-6 py-3">
                    {{ $header }}
                </th>

            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                @foreach($item as $itemField)
                    @if(is_array($itemField))
                        @continue
                    @endif
                    @if($loop->first)
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $itemField }}
                        </th>
                        @continue
                    @endif
                    <td class="px-6 py-4">
                        {{ $itemField }}
                    </td>
                @endforeach
                @if(!empty($item['action']))
                    <td class="px-6 py-4">
                        <a href="{{$item['action']['url'] ?? ''}}"
                           class="ont-medium text-blue-600 dark:text-blue-500 hover:underline">{{$item['action']['name'] ?? ''}}</a>
                    </td>
                @endif
            </tr>

        @endforeach
        {{--        @endforeach--}}
        </tbody>
    </table>
</div>
