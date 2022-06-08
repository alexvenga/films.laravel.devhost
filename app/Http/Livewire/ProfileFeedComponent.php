<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileFeedComponent extends Component
{

    use WithFileUploads;

    public Post $post;

    public $photo;

    public bool $showEditModal = false;

    public $rules = [
        'post.text' => 'nullable|string',
    ];

    public function mount()
    {
        $this->post = Post::make();
        $this->reset('photo');
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }


    public function updatedPhoto()
    {

        $this->validate([
            'photo' => 'image', // 1MB Max
        ]);

        $this->post = Post::make();
        $this->showEditModal = true;

        /*
        $this->photo->storePubliclyAs('avatars', auth()->user()->id . '.png', 'public');

        auth()->user()->avatar = Storage::disk('public')->url('avatars/' . auth()->user()->id . '.png');
        auth()->user()->save();
        auth()->user()->refresh();
        */
    }

    public function create()
    {
        $this->post = Post::make();
        $this->reset('photo');
        $this->showEditModal = true;
    }

    public function resetViews(Post $post)
    {
        $post->views = 0;
        $post->save();
    }

    public function resetLikes(Post $post)
    {
        $post->likes = 0;
        $post->save();
    }

    public function like(Post $post)
    {
        $post->is_liked = !$post->is_liked;
        $post->save();
    }

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function save()
    {

        $this->validate();
        $this->post->user_id = auth()->user()->id;
        $this->post->likes = mt_rand(100, 200);
        $this->post->views = $this->post->likes + mt_rand(100, 200);
        $this->post->save();

        if (!empty($this->photo)) {
            $this->validate([
                'photo' => 'image', // 1MB Max
            ]);

            $this->photo->storePubliclyAs('posts', $this->post->id . '.png', 'public');
            $this->post->photo = Storage::disk('public')->url('posts/' . $this->post->id . '.png');
            $this->post->save();
        }

        $this->post = Post::make();
        $this->reset('photo');
        $this->showEditModal = false;
    }

    public function render()
    {
        $posts = auth()->user()->posts()->latest()->get()->load('user');

        return view('livewire.profile-feed-component', compact('posts'));
    }
}
