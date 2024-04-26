<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-blue-700 to-sky-400 dark:bg-gray-900 ">
            <div class="flex justify-center items-center relative overflow-hidden bg-[#008ED6] lg:w-[1000px] sm:max-w-full lg:h-[450px] rounded-3xl shadow-md shadow-slate-600 " >
            <div class="bg-white w-[500px] h-[500px] absolute -left-44 rotate-45 rounded-3xl"></div>
            <div class="z-10 mr-52  w-80 h-72">
                <div class="w-40 m-auto">
                    <x-application-logo class="block fill-current text-gray-800 dark:text-gray-200" />
                </div>
                <h1 class="text-center text-3xl font-bold text-[#008ED6]">Mardawa Intiguna</h1>
                <h2 class="text-center text-3xl font-bold text-[#F7AE45]">Persada</h2>
            </div>

            <div class=" w-[450px] mt-6 px-6 py-4 dark:bg-gray-800 shadow-md  sm:rounded-lg">
                {{ $slot }}
            </div>
            </div>
          
        </div>
    </body>
</html>
