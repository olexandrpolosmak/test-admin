@props([
    'value' => null,
    'name' => 'image',
])

<div class="">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Small file input</label>
    <input name="{{$name}}" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file">
    <img class="h-auto max-w-lg transition-all duration-300 rounded-lg blur-sm hover:blur-none" src="{{$value}}" alt="image description">
</div>
