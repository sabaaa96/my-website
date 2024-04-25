<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach (\App\Models\BlogPost::all() as $post)
                    <div class="mb-6">
                        <h3 class="font-bold">{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>


