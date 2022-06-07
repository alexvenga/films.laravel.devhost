<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ProfileFeedComponent extends Component
{

    public Post $post;

    public bool $showEditModal = false;

    public $rules = [
        'post.text'       => 'nullable|string',
    ];

    public function mount() {
        $this->post = Post::make();
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function create()
    {
        $this->showEditModal = true;
    }

    public function save()
    {

        $this->validate();
        $this->post->user_id = auth()->user()->id;
        $this->post->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.profile-feed-component');
    }
}
