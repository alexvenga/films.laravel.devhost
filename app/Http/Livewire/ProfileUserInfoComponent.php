<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfileUserInfoComponent extends Component
{

    public User $user;

    public bool $showEditModal = false;

    public $rules = [
        'user.name'       => 'required|string|min:3',
        'user.birth_data' => 'nullable|string|max:191',
        'user.city'       => 'nullable|string|max:191',
        'user.status'     => 'nullable|string|max:191',
        'user.education'  => 'nullable|string|max:191',
    ];

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function edit()
    {
        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();
        $this->user->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.profile-user-info-component');
    }
}
