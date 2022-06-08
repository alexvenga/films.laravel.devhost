<x-app-layout>
    <div class="bg-white py-4 shadow border">

        <form method="get" class="flex items-center space-x-8 container" action="{{ route('search.result') }}">
            <div class="shrink-0">
                <img src="/assets/img/search.png" alt="">
            </div>
            <div class="grow">
                <input name="query" class="form-input w-full" autocomplete="off" value="{{ request('query') }}">
            </div>
            <div>
                <button type="submit" class="flex items-center space-x-4 font-bold bg-sky-600 text-white
                    uppercase px-4 py-2 leading-none">
                    <x-gmdi-search-o class="w-6 h-6"/>
                    Найти
                </button>
            </div>
        </form>

    </div>

    <div class="mt-4 container text-sm">
        456,345 результатов поиска по запросу "<b>{{ request('query') }}</b>":
    </div>

    <div class="fixed bottom-0 w-full" x-data="{ opened: false }">
        <div class="block text-right">
            <button class="text-gray-300" @click="opened = true">
                Добавить
            </button>
        </div>
        <form class="container py-2 grid gap-4" x-cloak x-show="opened">

            <label>
                Заголовок результата
                <input class="form-input w-full" required>
            </label>

            <label>
                Отображаемая ссылка
                <input class="form-input w-full required">
            </label>

            <label>
                Реальная ссылка
                <input class="form-input w-full required">
            </label>

            <label>
                Текстовое описание
                <input class="form-input w-full required">
            </label>

            <div class="flex justify-between mb-4">
                <button type="submit" class="p-4 bg-blue-700 text-white">Добавить</button>
                <button type="button" class="p-4 bg-red-700 text-white" @click="opened = false">Отменить</button>
            </div>

        </form>
    </div>


</x-app-layout>
