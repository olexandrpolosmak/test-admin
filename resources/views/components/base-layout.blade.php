<!doctype html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}"
      x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
      x-bind:class="{ 'dark': darkMode }" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students competition </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @stack('styles')
</head>

<body class="font-sans antialiased bg-[#F3F4F6] dark:bg-gray-900">
{{$slot}}
@livewireScripts
</body>

</html>
