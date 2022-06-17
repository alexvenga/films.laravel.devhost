<?php

namespace App\Http\Livewire;

use App\Models\Friend;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileFriendsComponent extends Component
{
    use WithFileUploads;

    public Friend $friend;

    public $photo;

    public bool $showEditModal = false;

    public $rules = [
        'friend.name' => 'required|string',
    ];

    public function mount()
    {
        $this->friend = Friend::make();
        $this->reset('photo');
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function create()
    {
        $this->post = Friend::make();
        $this->reset('photo');
        $this->showEditModal = true;
    }

    public function delete(Friend $friend)
    {
        $friend->delete();
    }

    public function save()
    {

        $this->validate();
        $this->friend->user_id = auth()->user()->id;
        $this->friend->save();

        if (!empty($this->photo)) {
            $this->validate([
                'photo' => 'image', // 1MB Max
            ]);

            $this->photo->storePubliclyAs('friends', $this->friend->id . '.png', 'public');
            $this->friend->photo = Storage::disk('public')->url('friends/' . $this->friend->id . '.png');
            $this->friend->save();
        }

        $this->friend = Friend::make();
        $this->reset('photo');
        $this->showEditModal = false;
    }

    public function render()
    {

        $friends = auth()->user()->friends()->latest()->get();

        return view('livewire.profile-friends-component', compact('friends'));
    }
}
