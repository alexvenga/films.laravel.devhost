<div class="divide-y-2">

    @forelse ($messages as $message)
        <div class="py-4">
            <div class="flex items-center justify-end space-x-4">
                <div class="text-blue-800 font-bold">{{ auth()->user()->name }}</div>
                <div class="flex items-center space-x-4 font-bold text-blue-800 justify-end">
                    <div class="shadow w-10 h-10 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                         style="background-image: url('{{ auth()->user()->getAvatarPath() }}');"></div>
                </div>
            </div>
            <div class="text-right font-bold text-lg pr-14">
                {{ $message }}
            </div>
        </div>
        @if($loop->first)
            <div class="py-4">
                <div class="flex items-center justify-start space-x-4">
                    <div class="flex items-center space-x-4 font-bold text-blue-800 justify-end">
                        <div class="shadow w-10 h-10 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                             style="background-image: url('/assets/img/chat/ash.jpg');"></div>
                    </div>
                    <div class="text-blue-800 font-bold">Алевтина Шолохова</div>
                </div>
                <div class="text-left font-bold text-lg pl-14">
                    надо встретиться.
                </div>
            </div>
        @endif
    @empty
        <div class="font-bold text-gray-400 py-4">Начните переписку...</div>
    @endforelse

    <form wire:submit.prevent="save" wire:loading.class="opacity-30" class="pt-4">
        {{--<label for="message" class="block mb-1 font-medium text-gray-900 dark:text-gray-300 pt-4">
            Сообщение
        </label>--}}
        <textarea id="message"
                  placeholder="Ваше сообщение"
                  wire:model.lazy="message"
                  rows="2"
                  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:bg-white focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        ></textarea>
        @if($errors->has('message'))
            <p class="mt-1 text-sm text-red-600 dark:text-red-500">
                {{ $errors->first('message') }}
            </p>
        @endif
        <div class="text-right mt-2">
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Отправить
            </button>
        </div>
    </form>

</div>
