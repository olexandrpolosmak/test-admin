@props([
    'name',
    'label' => null,
    'required' => false,
    'disabled' => false,
   'options' => [],
   'value' => null,

])
<div>
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{$label}}</label>
    <select id="{{$name}}"
            name="{{$name}}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            @if($required) required @endif
            @if($disabled) disabled @endif
    >
        @foreach($options as $key => $option)
            <option
                value="{{$key}}"
                @if($key == $value) selected @endif
            >{{$option}}
            </option>
        @endforeach
    </select>
</div>
