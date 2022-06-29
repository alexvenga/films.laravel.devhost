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

            <div class="mt-12">

                <div>
                    Новости:
                </div>

                <a href="{{ route('video') }}" class="flex space-x-4 mt-4 cursor-pointer bg-blue-50 hover:bg-gray-50">
                    <div class="w-40 h-20 bg-cover bg-center shadow"
                         style="background-image: url('/assets/news-video/news-1.jpg')"></div>
                    <div class="flex flex-col justify-center">
                        <div class="font-bold text-xl">
                            Евгений Курносов назначен и.о. губернатора
                        </div>
                        <div class="text-gray-500">
                            Топ новость дня
                        </div>
                    </div>
                </a>

                <a href="#" class="flex space-x-4 mt-4 cursor-pointer hover:bg-gray-50">
                    <div class="w-40 h-20 bg-cover bg-center shadow"
                         style="background-image: url('/assets/news-video/news-2.jpeg')"></div>
                    <div class="flex flex-col justify-center">
                        <div class="font-bold text-lg">
                            В кинопрокат вышел новый фильм "Агентство Антитроль"
                        </div>
                        <div class="text-gray-500">
                            Новость дня
                        </div>
                    </div>
                </a>

                <a href="#" class="flex space-x-4 mt-4 cursor-pointer hover:bg-gray-50">
                    <div class="w-40 h-20 bg-cover bg-center shadow"
                         style="background-image: url('/assets/news-video/news-3.jpg')"></div>
                    <div class="flex flex-col justify-center">
                        <div class="font-bold text-lg">
                            В Москве стоит аномально сильная жара
                        </div>
                        <div class="text-gray-500">
                            Новость дня
                        </div>
                    </div>
                </a>

            </div>

        </div>
        <div class="p-4 text-gray-500 text-center">
            &copy; Все права защищены
        </div>

    </div>


    <div class="fixed inset-0 z-40" x-data="{
        allSeconds: 20,
        countdownSeconds: 20,
        showAds:false,
        fillAdsLine:document.getElementById('fillAdsLine'),
        clickWindow: function() {
            this.showAds = true;
            let countdownInterval;
            countdownInterval = setInterval(() => {
              this.countdownSeconds--;
                this.fillAdsLine.style.width = (((this.allSeconds - this.countdownSeconds) / this.allSeconds) * 100)   + '%';
              if (this.countdownSeconds<=0) {
                clearInterval(countdownInterval);
              };
            }, 1000);
        }
        }" @click="clickWindow">
        <div class="fixed inset-0 z-40 bg-white flex flex-col justify-between"
             x-cloak x-show="showAds">

            <div @click="showAds = false">
                <div class="h-10 bg-gray-200 relative text-right flex items-center justify-end text-lg">
                    <div class="absolute w-0 h-10 bg-green-500 top-0 left-0 z-40 transition transition-all duration-1000" id="fillAdsLine"></div>
                    <div class="px-2 relative z-50" x-show="countdownSeconds>=1">
                        До закрытия <span x-text="countdownSeconds"></span> сек.
                    </div>
                    <div class="px-2 font-bold text-lg relative z-50" x-show="countdownSeconds<=0" x-cloak @click="showAds = false">
                        Закрыть
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center">
                <div class="text-center font-bold">
                    <div style="font-size: 22px;">Машинка для удаления катышек</div>
                    <div style="font-size: 28px;">Только для вас!</div>
                </div>
                <div class="py-4">
                    <img src="/assets/img/IMG_20220609_145042_467.jpg" alt="" class="block w-full h-auto">
                </div>
                <div class="p-4 text-center">
                    <button class="text-white bg-cyan-700 rounded-md leading-none uppercase px-8 py-4 text-lg font-bold">
                        Заказать
                    </button>
                </div>
            </div>

            <div></div>

        </div>
    </div>




</x-app-layout>
