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

    <!-- Scripts -->
    <script src="{{ mix('js/app.js', 'assets') }}"></script>

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 font-medium">

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 shadow dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="{{ route('profile') }}" class="flex items-center">
                <x-gmdi-add-reaction-s class="mr-3 h-6 text-blue-700"/>
                <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">ЧизБук</span>
            </a>
            <div>
                <ul class="flex space-x-8 text-sm font-medium">
                    @auth()
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                   class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    Выйти</a>
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

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
