<div class="space-y-4">
    <div class="bg-white shadow border p-4 flex space-x-4 items-center justify-between">
        <div class="text-blue-800 flex space-x-4 items-center cursor-pointer">
            <div class="shadow w-8 h-8 bg-gray-50 bg-cover bg-center rounded-full overflow-hidden"
                 style="background-image: url({{ auth()->user()->getAvatarPath() }});"></div>
            <div>Что происходит?</div>
        </div>
        <div class="cursor-pointer">
            <x-gmdi-photo-o class="w-8 h-8 text-blue-800"/>
        </div>
    </div>
</div>
