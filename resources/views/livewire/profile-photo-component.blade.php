<label for="profile-photo">
    @error('photo') <span class="text-red-800 font-bold">{{ $message }}</span> @enderror
    <label class="block shadow w-48 h-56 bg-gray-50 bg-cover bg-center"
    style="background-image: url({{ auth()->user()->getAvatarPath() }});"></label>
    <input type="file" wire:model="photo" id="profile-photo" class="opacity-0 absolute -z-50">
    <div type="button" class="py-2.5 px-5 mt-4 text-sm font-medium text-center text-gray-900 bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
        Изменить
    </div>
</label>
