<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostDelete extends Component
{
    public $post;

    public function mount($id) {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.post-delete');
    }

    public function cancel() {
        redirect('/');
    }

    public function delete() {
        $this->post->delete();
        redirect('/');
    }
}
