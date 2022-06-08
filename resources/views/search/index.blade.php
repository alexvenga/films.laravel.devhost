<x-app-layout>
    <div class="fixed left-0 right-0 w-full top-0 bottom-0 h-full bg-white z-50 flex items-center justify-center">

        <form method="get" class="flex items-center space-x-8 container" action="{{ route('search.result') }}">

            <div class="shrink-0">
                <img src="/assets/img/search.png" alt="">
            </div>

            <div class="grow">
                <input name="query" class="form-input w-full" autocomplete="off">
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
</x-app-layout>
