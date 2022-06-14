<div class="space-y-4">
    <div class="bg-white shadow border p-4 flex space-x-4 items-center justify-between">
        <div class="text-blue-800 flex space-x-4 items-center cursor-pointer"
             wire:click.prevent="create">
            <div class="shadow w-8 h-8 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                 style="background-image: url({{ auth()->user()->getAvatarPath() }});"></div>
            <div>Что происходит?</div>
        </div>
        <label class="cursor-pointer">
            <x-gmdi-photo-o class="w-8 h-8 text-blue-800"/>
            <input type="file" wire:model="photo" id="profile-photo" class="opacity-0 absolute -z-50">
        </label>
    </div>

    <div class="bg-white shadow border p-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4 text-sm font-bold text-blue-800">
                <div class="shadow w-7 h-7 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                     style="background-image: url('/assets/img/avatars/grebnev.png');"></div>
                <div>Миша Гребнев</div>
            </div>
            <div class="text-xs text-gray-700 cursor-pointer">Удалить</div>
        </div>
        <div class="mt-4">Милая!!! С нашей годовщиной!</div>
        <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
            <div class="flex items-center space-x-1 font-bold bg-gray-100 rounded-xl px-4 py-2 leading-none">
                <x-gmdi-favorite class="h-5 w-5 cursor-pointer hover:text-red-700"/>
                <div>{{ mt_rand(0,100) }}</div>
            </div>
            <div class="flex items-center space-x-1 font-bold text-gray-300 text-sx">
                <x-gmdi-visibility-o class="h-4 w-4"/>
                <div>{{ mt_rand(100,200) }}</div>
            </div>
        </div>
    </div>

    @foreach($posts as $postItem)
        <div class="bg-white shadow border p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4 text-sm font-bold text-blue-800">
                    <div class="shadow w-8 h-8 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                         style="background-image: url({{ $postItem->user->getAvatarPath() }});"></div>
                    <div>{{ $postItem->user->name }}</div>
                </div>
                <div class="text-xs text-gray-700 cursor-pointer"
                     wire:click="delete({{ $postItem->id }})">Удалить
                </div>
            </div>
            @if(!empty($postItem->text))
                <div class="mt-4">{{ $postItem->text }}</div>
            @endif
            @if(!empty($postItem->photo))
                <div class="mt-4">
                    <img src="{{ $postItem->photo }}" alt=""
                         class="w-full h-auto shadow border">
                </div>
            @endif
            <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
                <div class="flex items-center space-x-1 font-bold bg-gray-100 rounded-xl px-4 py-2 leading-none">
                    @if($postItem->likes && $loop->first && ($postItem->created_at > now()->subMinute()))
                        @if($postItem->is_liked)
                            <x-gmdi-favorite class="h-5 w-5 cursor-pointer text-red-700"
                                             wire:click="like({{ $postItem->id }})" id="id-likes-hart"/>
                        @else
                            <x-gmdi-favorite class="h-5 w-5 cursor-pointer hover:text-red-700"
                                             wire:click="like({{ $postItem->id }})" id="id-likes-hart"/>
                        @endif
                    @else
                        @if($postItem->is_liked)
                            <x-gmdi-favorite class="h-5 w-5 cursor-pointer text-red-700"
                                             wire:click="like({{ $postItem->id }})"/>
                        @else
                            <x-gmdi-favorite class="h-5 w-5 cursor-pointer hover:text-red-700"
                                             wire:click="like({{ $postItem->id }})"/>
                        @endif
                    @endif
                    @if($postItem->likes)
                        <div wire:click="resetLikes({{ $postItem->id }})"
                             @if($postItem->likes && $loop->first && ($postItem->created_at > now()->subMinute()))
                                 id="id-likes-animate"
                            @endif
                        >{{ $postItem->likes }}</div>
                    @endif
                </div>
                <div class="flex items-center space-x-1 font-bold text-gray-300 text-sx">
                    <x-gmdi-visibility-o class="h-4 w-4"/>
                    @if($postItem->views)
                        <div wire:click="resetViews({{ $postItem->id }})">{{ $postItem->views }}</div>
                    @endif
                </div>
            </div>
            @if($postItem->likes && $loop->first && ($postItem->created_at > now()->subMinute()))
                <script>
                    let count = 0;
                    let interval;
                    let LikeeBox = document.getElementById("id-likes-animate");
                    let LikeeHart = document.getElementById("id-likes-hart");
                    interval = setInterval(function () {
                        count += Math.round(Math.random() * 5);
                        if (count >= {{ $postItem->likes }}) {
                            clearInterval(interval);
                        }
                        /*
                        LikeeBox.animate([
                            // keyframes
                            {transform: 'translateY(0px)'},
                            {transform: 'translateY(-6px)'}
                        ], {
                            // timing options
                            duration: 200
                        });
                        */
                        LikeeHart.animate([
                            // keyframes
                            {transform: 'scale3d(1, 1, 1)'},
                            {transform: 'scale3d(1.3, 1.3, 1.3)'}
                        ], {
                            // timing options
                            duration: 300
                        });
                        LikeeBox.innerText = count;
                    }, 750);

                </script>
            @endif
        </div>
    @endforeach

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
                            Что происходит?
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
                            {{--
                            <label for="post.text" class="block mb-1 font-medium text-gray-900 dark:text-gray-300">
                                Что происходит?
                            </label>
                            --}}
                            <textarea type="text" id="post.text"
                                      wire:model.lazy="post.text"
                                      rows="7"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:bg-white focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            ></textarea>
                            @if($errors->has('post.text'))
                                <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('post.text') }}
                                </p>
                            @endif
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Опубликовать
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
