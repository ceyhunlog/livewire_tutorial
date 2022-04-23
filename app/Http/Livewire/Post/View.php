<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class View extends Component
{
    public int $count;

    public function render()
    {
        return view('livewire.post.view');
    }
}
