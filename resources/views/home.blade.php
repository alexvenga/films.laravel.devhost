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

    <div class="fixed inset-0 z-40" x-data="{
        countdownSeconds: 7,
        showAds:false,
        clickWindow: function() {
            this.showAds = true;
            let countdownInterval;
            countdownInterval = setInterval(() => {
              this.countdownSeconds--;
              if (this.countdownSeconds<=0) {
                clearInterval(countdownInterval);
              };
            }, 1000);
        }
        }" @click="clickWindow">
        <div class="fixed inset-0 z-40 bg-white flex flex-col justify-between"
             x-cloak x-show="showAds">

            <div>
                <div class="h-8 bg-gray-200 relative text-right flex items-center justify-end">
                    <div class="px-2" x-show="countdownSeconds>=1">
                        До закрытия <span x-text="countdownSeconds"></span> сек.
                    </div>
                    <div class="px-2 font-bold text-lg" x-show="countdownSeconds<=0" x-cloak @click="showAds = false">
                        Закрыть
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center">Изображение</div>

            <div></div>

        </div>
    </div>

</x-app-layout>
