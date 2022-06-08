<x-app-layout>

    @if(request()->session()->get('old') == 'yes')
        <div x-data="{ showModal: true }">
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
                                С возвращением, {{ auth()->user()->name }}!
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
                                Мы заметили что вы давно не посещали нашу социальную сеть <b>ЧиирсБук</b>,
                                и советуем вам ознакомится с нашими последними
                                <span class="font-bold text-blue-800">новостями</span>
                                и
                                <span class="font-bold text-blue-800">обновлениями</span>.
                            </p>

                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button type="button" @click.stop="showModal = false"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Закрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

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
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-blue-500 rounded-full leading-none font-bold p-1">
                            1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-phone-o class="w-5 h-5 mr-2 text-blue-900"/>
                        Звонки
                        <span
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">
                            12</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}"
                       class="flex items-center">
                        <x-gmdi-people class="w-5 h-5 mr-2 text-blue-900"/>
                        Друзья
                        <span
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">
                            23</span>
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
                        <span
                            class="absolute right-0 flex items-center justify-center w-5 h-5 ml-2 text-xs text-white bg-gray-500 rounded-full leading-none font-bold p-1">
                            48</span>
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

        <div class="w-56 shrink-0 space-y-4 text-sm">

            <div class="bg-white shadow border p-4">
                <livewire:profile-photo-component/>
            </div>

            <div class="bg-white shadow border p-4">
                <a href="#" class="flex items-center text-blue-900">
                    <x-gmdi-link-o class="w-5 h-5 mr-2"/>
                    Ссылка на профиль
                </a>
            </div>

            {{--
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
            --}}


        </div>
        <div class="grow">
            <livewire:profile-user-info-component/>

            <div class="mt-4">

                <livewire:profile-feed-component/>

            </div>
        </div>
    </div>

    {{--
    <div x-data="{ showModal: false }" class="fixed bottom-0 right-0">
        <a href="{{ route('profile') }}"
           class="text-gray-300"
           @click.prevent="showModal = true">
            Удалить
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
                                Удалить аккаунт (НАСТОЯЩЕЕ УДАЛЕНИЕ)
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
                                Аккаунт и все данные будут удалены!<br>
                                Операция необратима!
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
    </div>
    --}}

</x-app-layout>
