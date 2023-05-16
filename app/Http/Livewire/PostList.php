<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    protected $paginationTheme='bootstrap';

    public $search = '';

    public function updateSearch() {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.post-list', 
        ['posts'=>Post::where('title', 'like', '%'.$this->search.'%')->paginate(5)]);
    }

    public function add() {
        redirect('/add');
    }

    public function edit($id) {
        redirect("/$id/edit");
    }

    public function delete($id) {
        redirect("/$id/delete");
    }
}
