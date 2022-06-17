<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileChatComponent extends Component
{

    public string $message = '';

    public array $messages = [];

    public bool $showAnswer = false;

    public array $rules = [
        'message' => 'required|string',
    ];

    protected $listeners = ['addAnswer' => 'addAnswer'];


    public function addAnswer() {
        $this->showAnswer = true;
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function save()
    {

        $this->validate();

        $this->messages[] = $this->message;

        $this->reset('message');
    }


    public function render()
    {
        return view('livewire.profile-chat-component');
    }
}
