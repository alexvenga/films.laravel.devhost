<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhotoComponent extends Component
{

    use WithFileUploads;

    public $photo;


    public function updatedPhoto()
    {

        $this->validate([
            'photo' => 'image', // 1MB Max
        ]);

        $this->photo->storePubliclyAs('avatars', auth()->user()->id . '.png', 'public');

        auth()->user()->avatar = Storage::disk('public')->url('avatars/' . auth()->user()->id . '.png');
        auth()->user()->save();
        auth()->user()->touch();
        auth()->user()->refresh();
    }

    public function render()
    {
        return view('livewire.profile-photo-component');
    }


}
