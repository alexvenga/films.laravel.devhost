<x-app-layout>
    <div class="fixed inset-0 bg-white flex flex-col justify-between">
        <div class="text-gray-700 flex overflow-hidden space-x-4 p-4 uppercase justify-around">
            <div>Новости</div>
            <div>Погода</div>
            <div>Курсы</div>
            <div>Музыка</div>
        </div>
        <div class="flex flex-col items-center">

            <div class="mb-4">
                <img src="/assets/img/search.png" alt="">
            </div>

            <form method="get" class="flex items-center space-x-2 container" action="{{ route('search.result') }}">

                <div class="grow">
                    <input name="query" class="form-input w-full" autocomplete="off">
                </div>

                <div class="shrink-0">
                    <button type="submit" class="bg-sky-600 text-white
                    uppercase px-4 py-2 leading-none">
                        <x-gmdi-search-o class="w-6 h-6"/>
                    </button>
                </div>

            </form>

        </div>
        <div class="p-4 text-gray-500 text-center">
            &copy; Все права защищены
        </div>

    </div>

    <div class="fixed inset-0 z-40" x-data="{ showAds:false }" @click="showAds = true">
        <div class="fixed inset-0 z-40 bg-white flex items-center justify-center font-bold"
        x-cloak x-show="showAds">РЕКЛАМА</div>
    </div>

</x-app-layout>
