<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Сheese') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css', 'assets') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @livewireStyles

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js', 'assets') }}" defer></script>

    {{--
    <script>
        if (localStorage.siteTheme === 'dark' || (!('siteTheme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            localStorage.siteTheme = 'dark';
            document.documentElement.classList.add('dark')
        } else {
            localStorage.removeItem('siteTheme');
            document.documentElement.classList.remove('dark')
        }
    </script>
    --}}

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-700 font-medium">

    @if(Route::is(['login','register','profile','messages','video']))
        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 shadow dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="{{ route('profile') }}" class="flex items-center">
                    <x-gmdi-handshake class="mr-3 h-6 text-blue-700"/>
                    <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">
                    ЧиирсБук</span>
                </a>
                <div>
                    <ul class="flex space-x-8 text-sm font-medium">
                        @auth()
                            <li>
                                <a href="{{ route('profile') }}"
                                   class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 relative">
                                    <x-gmdi-notifications-o class="ml-2 h-5 w-5"/>
                                    <div
                                        class="absolute -right-6 -top-2.5 flex items-center justify-center text-xs text-white bg-blue-500 rounded-full leading-none font-bold px-2 py-1">
                                        78
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}"
                                   class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    <x-gmdi-apps-o class="ml-2 h-5 w-5"/>
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                       class="flex items-center py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                        Выйти
                                        <x-gmdi-logout-s class="ml-2 h-4 w-4"/>
                                    </a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li>
                                <a href="{{ route('login') }}"
                                   class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Войти</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                   class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Регистрация</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    @endif

    <!-- Page Content -->
    <main class="grow relative">
        {{ $slot }}
    </main>

    {{--
    <div x-data="{
                dark: localStorage.siteTheme === 'dark',
                changeTheme() {
                    this.dark = !this.dark;
                    if (this.dark) {
                        localStorage.siteTheme = 'dark';
                    } else {
                        localStorage.removeItem('siteTheme');
                    }
                    if (localStorage.siteTheme === 'dark') {
                        document.documentElement.classList.add('dark')
                    } else {
                        document.documentElement.classList.remove('dark')
                    }
                }
            }" class="fixed bottom-0 right-0">
        <button type="button" @click="changeTheme" class="opacity-30">
            <template x-if="!dark">
                <x-gmdi-dark-mode-o class="w-6 h-6"/>
            </template>
            <template x-if="dark" x-cloak>
                <x-gmdi-light-mode-o class="w-6 h-6"/>
            </template>
        </button>
    </div>
    --}}
</div>
</body>
</html>
