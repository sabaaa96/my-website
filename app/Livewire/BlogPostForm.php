<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Livewire\Attributes\Url;
use Livewire\Component;

class BlogPostForm extends Component
{
    public $title = '';
    public $content = '';
    #[Url]
    public $id = '';

    public function render()
    {
        return view('livewire.blog-post-form');
    }

    public function mount()
    {
        /** @var BlogPost $post */
        $post = BlogPost::find($this->id);

        if ($post) {
            $this->title = $post->getTitle();
            $this->content = $post->getContent();
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($this->id) {
            /** @var BlogPost $post */
            $post = BlogPost::find($this->id);
            $post->setTitle($this->title);
            $post->setContent($this->content);
            $post->save();

        } else {
            \App\Models\BlogPost::create([
                'title' => $this->title,
                'content' => $this->content,
            ]);
        }
        session()->flash('message', 'Successfull!');
    }
}
