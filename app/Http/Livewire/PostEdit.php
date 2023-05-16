<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostEdit extends Component
{
    public $post;
    public $title;
    public $content;

    public function mount($id) {
        $this->post = Post::find($id);
        $this->title = $this->post->title;
        $this->content = $this->post->content;
    }

    public function render()
    {
        return view('livewire.post-edit');
    }

    public function save() {
        $this->post->title = $this->title;
        $this->post->content = $this->content;
        $this->post->save();

        redirect("/");
    }
}
