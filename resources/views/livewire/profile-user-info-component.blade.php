<div class="bg-white shadow border p-4">
    <div class="flex justify-between items-center">
        <div class="font-bold text-xl leading-none">{{ $user->name }}</div>
        <div class="cursor-pointer text-xs text-blue-800" wire:click="edit">Изменить</div>
    </div>
    @if(!empty($user->birth_data))
        <div class="grid gap-4 grid-cols-2 mt-2 text-sm">
            <div>День рождения:</div>
            <b>{{ $user->birth_data }}</b>
        </div>
    @endif
    @if(!empty($user->city))
        <div class="grid gap-4 grid-cols-2 mt-2 text-sm">
            <div>Город:</div>
            <b>{{ $user->city }}</b>
        </div>
    @endif
    @if(!empty($user->status))
        <div class="grid gap-4 grid-cols-2 mt-2 text-sm">
            <div>Семейное положение:</div>
            <b>{{ $user->status }}</b>
        </div>
    @endif
    @if(!empty($user->education))
        <div class="grid gap-4 grid-cols-2 mt-2 text-sm">
            <div>Образование:</div>
            <b>{{ $user->education }}</b>
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="overflow-y-auto fixed inset-0 z-50 bg-gray-900 bg-opacity-50 flex items-center justify-center"
             x-data="{ showModal: @entangle('showEditModal') }"
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
                            Изменить данные
                        </h3>
                        <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                @click.stop="showModal = false">
                            <x-gmdi-close class="w-5 h-5"/>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-4">

                        <div>
                            <label for="name" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Имя
                            </label>
                            <input type="text" id="name"
                                   wire:model.lazy="user.name"
                                   placeholder="Иванов Иван" required
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($errors->has('user.name'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('user.name') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="birth_data" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Дата рождения
                            </label>
                            <input type="text" id="birth_data"
                                   wire:model.lazy="user.birth_data"
                                   placeholder="30 января 1984"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($errors->has('user.birth_data'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('user.birth_data') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="city" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Город
                            </label>
                            <input type="text" id="city"
                                   wire:model.lazy="user.city"
                                   placeholder="Москва"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($errors->has('user.city'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('user.city') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="status" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Семейный статус
                            </label>
                            <input type="text" id="status"
                                   wire:model.lazy="user.status"
                                   placeholder="Холост"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($errors->has('user.status'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('user.status') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="education" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Образование
                            </label>
                            <input type="text" id="education"
                                   wire:model.lazy="user.education"
                                   placeholder="Высшее"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($errors->has('user.education'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('user.education') }}
                                </p>
                            @endif
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Сохранить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
