<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 10;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increase()
    {
        $this->count++;
    }

    public function decrease()
    {
        $this->count--;
    }
}
