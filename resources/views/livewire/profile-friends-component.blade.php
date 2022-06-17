<div class="bg-white shadow border p-4">
    <h3 class="font-bold">Друзья</h3>
    <div class="flex items-center justify-around flex-wrap">

        @foreach($friends as $friend)
            <div class="text-xs text-center mt-2" wire:click="delete({{ $friend->id }})">
                <div class="mb-1 h-12 w-12 overflow-hidden rounded-full shadow bg-center bg-cover"
                     style="background-image: url('{{ $friend->photo }}')"></div>
                {{ $friend->name }}
            </div>
        @endforeach

    </div>

    <div class="text-sm text-blue-800 mt-4" wire:click="create">Все друзья</div>

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
                            Добавить друга
                        </h3>
                        <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                @click.stop="showModal = false">
                            <x-gmdi-close class="w-5 h-5"/>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-4">

                        @if(!empty($photo))
                            <div>
                                <img src="{{ $photo->temporaryUrl() }}" alt=""
                                     class="w-full h-auto shadow border">
                            </div>
                        @endif

                        <div>
                            <label for="photo" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Фото
                            </label>
                            <input type="file" id="photo"
                                   wire:model="photo"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:bg-white focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                            @if($errors->has('photo'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('photo') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="friend.name" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Имя
                            </label>
                            <input type="text" id="friend.name"
                                   wire:model.lazy="friend.name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:bg-white focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                            @if($errors->has('friend.name'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('friend.name') }}
                                </p>
                            @endif
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Добавить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
