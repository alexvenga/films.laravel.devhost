<div>
    <label for="profile-photo" class="block shadow w-48 h-56 bg-gray-50 bg-cover bg-center"
    style="background-image: url({{ $avatarPath.'?time='.time() }});"></label>
    <input type="file" wire:model="photo" id="profile-photo" class="opacity-0 absolute -z-50">
    @error('photo') <span class="text-red-800 font-bold">{{ $message }}</span> @enderror
</div>
