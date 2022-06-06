<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePhotoComponent extends Component
{

    use WithFileUploads;

    public $photo;

    public string $avatarPath;

    public function mount()
    {
        if (Storage::disk('public')->exists('photos/avatar.png')) {
            $this->avatarPath = Storage::disk('public')->url('photos/avatar.png');
        } else {
            $this->avatarPath = '/assets/img/no-photo.png';
        }
    }

    public function updatedPhoto()
    {

        $this->validate([
            'photo' => 'image', // 1MB Max
        ]);

        $this->photo->storePubliclyAs('photos', 'avatar.png', 'public');

        $this->avatarPath = Storage::disk('public')->url('photos/avatar.png');
    }

    public function render()
    {
        return view('livewire.profile-photo-component');
    }


}
