<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class Add extends Component
{
    public $title;

    public $rules = [
        'title' => 'required|min:6',
    ];

    public $messages = [
        'title.required' => 'Lütfen Başlığı Giriniz',
        'title.min' => 'En az :min karakter olmalıdır'
    ];

    public function render()
    {
        return view('livewire.article.add');
    }

    public function addArticle()
    {
        $this->validate();
    }
}
