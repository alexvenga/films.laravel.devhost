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

        <div class="w-56">
            <div class="bg-white shadow border p-4">
            <livewire:profile-photo-component/>
            </div>
        </div>
        <div class="grow">
            Feed
        </div>
    </div>
</x-app-layout>
