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
    <body class="font-sans antialiased">
        <div class="flex min-h-screen bg-gray-100">

            {{-- Sidebar --}}
            <aside class="bg-gray-800 text-white w-64 p-4">
                <div class="logo text-xl font-semibold mb-8 flex items-center gap-2">
                    <div class="flex justify-center mb-0">
                        <img src="{{ asset('images/brand.gif') }}" alt="Logo" class="w-80 h-12 ">
                    </div>
                   
                </div>
                

                <nav class="space-y-2 mt-4">
                    <div class="border-b border-gray-300 my-4 mt-16"></div>
                    <!-- Your sidebar links -->
                    <a href="{{route('dashboard')}}" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Home
                    </a>
                    <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        Company
                    </a>
                    <a href="{{route('employees')}}" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-template"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><path d="M3 9h18"></path><path d="M3 15h18"></path><path d="M7 3v18"></path><path d="M17 3v18"></path></svg>
                        Employees
                    </a>
                    <a href="{{route('users')}}" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8" cy="7" r="4"></circle><path d="M20 21v-2a4 4 0 0 0-3-3.88"></path><path d="M13 15c-2.3 0-4.4-1.6-5-4"></path><path d="M22 7h-4"></path></svg>
                        Users
                    </a>
                    <a href="{{route('application.index')}}" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap"><polyline points="13 2 13 9 20 9"></polyline><polyline points="12 17 12 22 5 22"></polyline><polyline points="8 6 8 11 15 11"></polyline></svg>
                        Recruitment
                    </a>
                    <a href="{{route('career.career')}}" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap"><path d="M12 2v15"></path><path d="m18.7 8.3-6.3 3.6-6.3-3.6"></path><path d="M3 14v7a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M8 2v5"></path><path d="M16 2v5"></path></svg>
                        Career
                    </a>                  
                    
                </nav>
            </aside>

            {{-- Main Content --}}
            <div class="flex-1 flex flex-col">
                {{-- Top Navigation --}}
                @include('layouts.navigation')

                {{-- Page Header --}}
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                {{-- Page Content --}}
                <main class="p-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
