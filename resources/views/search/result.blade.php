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


    <div class="container mt-4 flex">
        <div class="space-y-4 grow">
            @foreach($results as $result)
                <div class="border shadow p-4 bg-white relative">
                    <div class="overflow-hidden w-full">
                        <a href="{{ $result->real_link }}" class="text-lg font-bold text-sky-900 block">
                            {{ $result->header }}
                        </a>
                        <a href="{{ $result->real_link }}" class="text-sm text-sky-700 block mt-0.5 w-full truncate leading-none">
                            {{ $result->link }}
                        </a>
                        <div class=" mt-1 text-gray-700">
                            {{ $result->text }}
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0">
                        <a href="{{ route('search.result.delete', $result) }}"
                           class="block bg-gray-50 p-2 opacity-0 hover:opacity-100">
                            <x-gmdi-close-o class="h-5 w-5"/>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-56 shrink-0">

        </div>
    </div>


    <div class="fixed bottom-0 w-full" x-data="{ opened: {{ $errors->count() > 0 ? 'true' : 'false' }} }">
        <div class="block text-right">
            <button class="text-gray-300" @click="opened = true">
                Добавить
            </button>
        </div>
        <form class="container py-2 grid gap-4" x-cloak x-show="opened"
              method="POST" action="{{ route('search.result.add') }}">
            @csrf

            <div>
                <label>
                    Заголовок результата
                    <input class="form-input w-full" name="header" value="{{ old('header') }}">
                </label>
                @if($errors->has('header'))
                    <div class="text-red-800">
                        {{ $errors->first('header') }}
                    </div>
                @endif
            </div>

            <div>
                <label>
                    Отображаемая ссылка
                    <input class="form-input w-full" name="link" value="{{ old('link') }}">
                </label>
                @if($errors->has('link'))
                    <div class="text-red-800">
                        {{ $errors->first('link') }}
                    </div>
                @endif
            </div>

            <div>
                <label>
                    Реальная ссылка
                    <input class="form-input w-full" name="real_link" value="{{ old('real_link') }}">
                </label>
                @if($errors->has('real_link'))
                    <div class="text-red-800">
                        {{ $errors->first('real_link') }}
                    </div>
                @endif
            </div>

            <div>
                <label>
                    Текстовое описание
                    <textarea class="form-textarea w-full" name="text">{{ old('real_link') }}</textarea>
                </label>
                @if($errors->has('real_link'))
                    <div class="text-red-800">
                        {{ $errors->first('real_link') }}
                    </div>
                @endif
            </div>

            <div class="flex justify-between mb-4">
                <button type="submit" class="p-4 bg-blue-700 text-white">Добавить</button>
                <button type="button" class="p-4 bg-red-700 text-white" @click="opened = false">Отменить</button>
            </div>

        </form>
    </div>


</x-app-layout>
