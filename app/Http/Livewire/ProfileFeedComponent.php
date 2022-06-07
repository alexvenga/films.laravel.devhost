<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ProfileFeedComponent extends Component
{

    public Post $post;

    public bool $showEditModal = false;

    public $rules = [
        'post.text' => 'nullable|string',
    ];

    public function mount()
    {
        $this->post = Post::make();
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function create()
    {
        $this->post = Post::make();
        $this->showEditModal = true;
    }

    public function resetViews(Post $post) {
        $post->views = 0;
        $post->save();
    }

    public function resetLikes(Post $post) {
        $post->likes = 0;
        $post->save();
    }

    public function like(Post $post) {
        $post->is_liked = !$post->is_liked;
        $post->save();
    }

    public function delete(Post $post) {
        $post->delete();
    }

    public function save()
    {

        $this->validate();
        $this->post->user_id = auth()->user()->id;
        $this->post->views = mt_rand(500, 1000);
        $this->post->likes = $this->post->views + mt_rand(100, 200);
        $this->post->save();
        $this->post = Post::make();
        $this->showEditModal = false;
    }

    public function render()
    {
        $posts = auth()->user()->posts()->latest()->get()->load('user');

        return view('livewire.profile-feed-component', compact('posts'));
    }
}
