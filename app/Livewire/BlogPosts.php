<?php

namespace App\Livewire;

use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlogPosts extends Component
{
    public function delete($id)
    {
        if(!Auth::check()){
            return;
        }
        $post = BlogPost::find($id);
        $post->delete();
    }

    public function render()
    {
        return view('livewire.blog-posts');
    }
}
