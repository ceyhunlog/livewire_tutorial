<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;
 
    public $photo;
    public $newPhoto = 'null';

    public function render()
    {
        return view('livewire.files.upload');
    }
 
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
 
        $this->newPhoto = $this->photo->store('public/photos');
    }
}
