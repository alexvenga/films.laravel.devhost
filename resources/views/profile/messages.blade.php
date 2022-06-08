<x-app-layout>
    <div class="container flex mt-3 space-x-4">

        <div class="w-44 shrink-0">
            <ul class="mt-4 space-y-4 relative leading-none">
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
                        Новости друзей
                    </a>
                </li>
                <li>
                    <a href="{{ route('messages') }}"
                       class="flex items-center">
                        <x-gmdi-message-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Общение
                        <span
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">
                            1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-phone-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Звонки
                        <span
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-people class="w-5 h-5 mr-2 text-blue-900"/>
                        Друзья
                        <span
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">3</span>
                    </a>
                </li>
                {{--
                                <li>
                                    <a href="{{ route('profile') }}"
                                       class="flex items-center">
                                        <x-gmdi-people class="w-5 h-5 mr-2 text-blue-900"/>
                                        Сообщества
                                    </a>
                                </li>--}}
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
                        Загрузки
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
                        <x-gmdi-add class="w-5 h-5 mr-2 text-blue-900"/>
                        Объявления
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-edit-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Изменить страницу
                    </a>
                </li>
                <li x-data="{ showModal: false }">
                    <a href="{{ route('profile') }}"
                       class="flex items-center"
                       @click.prevent="showModal = true">
                        <x-gmdi-delete-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Удалить страницу
                    </a>

                    <form method="POST" action="{{ route('profile.delete', auth()->user()) }}">
                        @csrf
                        @method('DELETE')
                        <div class="overflow-y-auto fixed inset-0 z-50 bg-gray-900 bg-opacity-50 flex items-center justify-center"

                             @close.stop="showModal = false"
                             @keydown.escape.stop="showModal = false"
                             @click.stop="showModal = false"
                             x-show="showModal" x-cloak
                        >
                            <div class="relative p-4 w-full max-w-2xl"
                                 x-show="showModal" x-cloak
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave="ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded shadow dark:bg-gray-700"
                                     @click.stop="">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Удалить аккаунт
                                        </h3>
                                        <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                @click.stop="showModal = false">
                                            <x-gmdi-close class="w-5 h-5"/>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-4">

                                        <p>
                                            Нам очень жаль что вы решили удалить ваш аккаунт из социальной сети ЧиирсБук!
                                        </p>

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button type="submit"
                                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            Удалить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </li>
            </ul>
        </div>

        <div class="grow space-y-4">

            <div class="p-4 shadow bg-white flex items-center justify-between">
                <div class="flex items-center space-x-4 text-sm font-bold text-blue-800">
                    <div class="shadow w-8 h-8 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                         style="background-image: url({{ auth()->user()->getAvatarPath() }});"></div>
                    <div>{{ auth()->user()->name }}</div>
                </div>

                <div class="flex items-center space-x-4 font-bold">
                    <span class="text-lg">
                        Общение
                    </span>
                    <x-gmdi-search-o class="w-6 h-6 text-blue-800"/>
                </div>
            </div>

            <style>
                .fade {
                    animation: fadeIn ease 1s infinite;
                    -webkit-animation: fadeIn ease 1s infinite;
                    -moz-animation: fadeIn ease 1s infinite;
                    -o-animation: fadeIn ease 1s infinite;
                    -ms-animation: fadeIn ease 1s infinite;
                }

                @keyframes fadeIn {
                    0% {
                        opacity: 1;
                    }
                    50% {
                        opacity: 0.7;
                    }
                    100% {
                        opacity: 1;
                    }
                }

                @-moz-keyframes fadeIn {
                    0% {
                        opacity: 1;
                    }
                    50% {
                        opacity: 0.7;
                    }
                    100% {
                        opacity: 1;
                    }
                }

                @-webkit-keyframes fadeIn {
                    0% {
                        opacity: 1;
                    }
                    50% {
                        opacity: 0.7;
                    }
                    100% {
                        opacity: 1;
                    }
                }

                @-o-keyframes fadeIn {
                    0% {
                        opacity: 1;
                    }
                    50% {
                        opacity: 0.7;
                    }
                    100% {
                        opacity: 1;
                    }
                }

                @-ms-keyframes fadeIn {
                    0% {
                        opacity: 1;
                    }
                    50% {
                        opacity: 0.7;
                    }
                    100% {
                        opacity: 1;
                    }
                }
            </style>

            <div class="shadow bg-white cursor-pointer bg-blue-50 border-2 border-blue-300 relative flex">
                <div class="bg-cover w-20 shrink-0"
                     style="background-image: url('/assets/img/avatars/0.jpeg');"></div>
                <div class="grow p-4 m-0 text-lg font-bold">
                    <div>
                        От
                        <span class="text-blue-800">Вера полевая</span>
                    </div>
                    <div>
                        Лиля, это мама. Я вчера освободилась. Давай поговорим
                    </div>
                </div>
                <div class="absolute -top-2 -right-2 bg-blue-500 leading-none px-2 py-0.5 text-white rounded font-bold text-sm fade">
                    Новое
                </div>
            </div>

            <div class="shadow bg-white cursor-pointer flex">
                <div class="bg-cover w-20 shrink-0"
                     style="background-image: url('/assets/img/avatars/1.jpeg');"></div>
                <div class="grow p-4 m-0">
                    <div>
                        От
                        <span class="text-blue-800">Петров Алексей</span>
                    </div>
                    <div>
                        Кратки текст сообщения который виден тут...
                    </div>
                </div>
            </div>

            <div class="shadow bg-white cursor-pointer flex">
                <div class="bg-cover w-20 shrink-0"
                     style="background-image: url('/assets/img/avatars/2.jpeg');"></div>
                <div class="grow p-4 m-0">
                    <div>
                        От
                        <span class="text-blue-800">Петров Алексей</span>
                    </div>
                    <div>
                        Кратки текст сообщения который виден тут...
                    </div>
                </div>
            </div>

            <div class="shadow bg-white cursor-pointer flex">
                <div class="bg-cover w-20 shrink-0"
                     style="background-image: url('/assets/img/avatars/3.jpeg');"></div>
                <div class="grow p-4 m-0">
                    <div>
                        От
                        <span class="text-blue-800">Петров Алексей</span>
                    </div>
                    <div>
                        Кратки текст сообщения который виден тут...
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
