<x-app-layout>
    <div class="container flex mt-3 space-x-4">

        <div class="w-40">
            <ul class="mt-4 space-y-3 relative">
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-supervised-user-circle-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Моя страница
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-newspaper-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Новости
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-message-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Сообщения
                        <span class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">12</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-phone-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Звонки
                        <span class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-people class="w-5 h-5 mr-2 text-blue-900"/>
                        Друзья
                        <span class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">3</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-people class="w-5 h-5 mr-2 text-blue-900"/>
                        Сообщества
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-photo-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Фотографии
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-library-music-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Музыка
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-video-camera-back-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Видео
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-games-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Игры
                    </a>
                </li>
                <li>
                    &nbsp;
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-notes-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Закладки
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-add class="w-5 h-5 mr-2 text-blue-900"/>
                        Реклама
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-apps-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Управление
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-56 space-y-4 text-sm">

            <div class="bg-white shadow border p-4">
                <livewire:profile-photo-component/>
            </div>

            <div class="bg-white shadow border p-4">
                <a href="#" class="flex items-center text-blue-900">
                    <x-gmdi-link-o class="w-5 h-5 mr-2"/>
                    Ссылка на профиль
                </a>
            </div>

            <div class="bg-white shadow border p-4">
                <h3>Подарки</h3>
                <div class="flex items-center justify-around flex-wrap mt-2">
                    <img alt="" src="/assets/img/podarki/1.png" class="h-14 w-14">
                    <img alt="" src="/assets/img/podarki/2.png" class="h-14 w-14">
                    <img alt="" src="/assets/img/podarki/3.png" class="h-14 w-14">
                    <img alt="" src="/assets/img/podarki/4.png" class="h-14 w-14">
                    <img alt="" src="/assets/img/podarki/5.png" class="h-14 w-14">
                    <img alt="" src="/assets/img/podarki/6.png" class="h-14 w-14">
                </div>
            </div>

            <div class="bg-white shadow border p-4">
                <h3>Друзья</h3>
                <div class="flex items-center justify-around flex-wrap">

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/1.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Наталья
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/2.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Иван
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/3.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Светлана
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/4.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Мария
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/5.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Саша
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/6.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Ксения
                    </div>

                </div>
            </div>


            <div class="bg-white shadow border p-4">
                <h3>Друзья онлайн</h3>
                <div class="flex items-center justify-around flex-wrap">

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/7.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Ангелина
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/8.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Мира
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/9.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Юлия
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/10.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Дмитрий
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/11.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Михаил
                    </div>

                    <div class="text-xs text-center mt-2">
                        <img alt="" src="/assets/img/users/12.jpeg" class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow">
                        Мила
                    </div>

                </div>
            </div>

        </div>
        <div class="grow">
            Feed
        </div>
    </div>
</x-app-layout>
