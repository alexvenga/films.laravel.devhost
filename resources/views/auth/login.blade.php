<x-app-layout>
    <div class="min-h-screen flex items-center justify-center">

        <div class="p-6 w-96 bg-white border border-gray-200 shadow-md rounded dark:bg-gray-800 dark:border-gray-700 -mt-12">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Вход
            </h5>

            @if ($errors->any())
                <div class="mt-3">
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mt-4">
                    <label class="block font-bold" for="email">
                        Email
                    </label>
                    <input class="form-input block mt-1 w-full"
                           id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mt-4">
                    <label class="block font-bold" for="password">
                        Пароль
                    </label>
                    <input class="form-input block mt-1 w-full"
                           id="password" type="password"
                           name="password"
                           required autocomplete="current-password">
                </div>

                <div class="mt-4">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Войти
                    </button>
                </div>


            </form>

        </div>
    </div>
</x-app-layout>
