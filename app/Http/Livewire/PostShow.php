<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostShow extends Component
{
    public $post;

    public function mount($id) {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
