<?php

namespace App\Livewire;

use Livewire\Component;

class BlogPostForm extends Component
{
    public $title = '';
    public $content = '';

    public function render()
    {
        return view('livewire.blog-post-form');
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        \App\Models\BlogPost::create([
            'title' => $this->title,
            'content' => $this->content,

        ]);

        session()->flash('message', 'Successfull!');
    }
}
