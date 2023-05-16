<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostAdd extends Component
{
    public $title;
    public $content;

    public function render()
    {
        return view('livewire.post-add');
    }

    public function create() {
        $postCreated = Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        redirect("/");
    }

    public function back() {
        redirect("/");
    }
}
