<div>
    @foreach(\App\Models\BlogPost::all() as $post)
        <div wire:key="{{ $post->id }}">
            <div class="mb-6">
                <h3 class="font-bold">{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <button wire:click="delete({{$post->id}})" class="bg-red-600">Delete</button>
            </div>
        </div>
    @endforeach
</div>
