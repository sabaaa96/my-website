<div>
    @foreach(\App\Models\BlogPost::all() as $post)
        <div wire:key="{{ $post->id }}">
            <div class="p-4">
                <h3 class="font-bold">{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <div class="flex justify-end space-x-2">
                    <a href="{{ url('/blog-post-form?id=').$post->id}}" class="bg-yellow-400 text-white py-2 px-4 rounded-full hover:bg-yellow-700 transition duration-300 flex items-center justify-center w-24">
                        Edit
                    </a>
                    <button wire:click="delete({{$post->id}})" class="bg-red-600 text-white py-2 px-4 rounded-full hover:bg-red-700 transition duration-300 flex items-center justify-center w-24">
                        Delete
                    </button>
                </div>
                @if (!$loop->last)
                    <hr class="mt-4 mb-2 border-t-2 border-gray-200">
                @endif
            </div>
        </div>
    @endforeach
</div>
