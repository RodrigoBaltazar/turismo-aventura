<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="relative min-h-screen flex flex-col">
            <nav class="flex-shrink-0 bg-indigo-600">
                <div class="max-w-7xl mx-auto px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <div class="flex items-center px-2">
                            <div class="flex-shrink-0">
                                {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow"> --}}
                            </div>
                        </div>

                        <div class="block w-80">
                            <div class="text-center">
                                    Meu blog Portugal
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            @yield('body')
        </div>

        @livewireScripts
    </body>
</html>
