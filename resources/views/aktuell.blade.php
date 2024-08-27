<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @livewire('aktuell')
                    <ul class="video-list parent">
                        @foreach ($videos as $video)
                            <div class="video-container">
                                <li class="video-item">
                                    <a href="{{ $video->url }}" target="_blank">
                                        <img src="{{ $video->thumbnails_high }}" alt="{{ $video->title }}">
                                        <span class="video-title">{{ $video->title }}</span>
                                    </a>
                                </li>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }
        .video-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 0;
            list-style: none;
        }

        .video-container {
            background-color: #f2f2f2; /* Hellgrauer Hintergrund */
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Schatteneffekt */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .video-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
        }

        .video-item img {
            width: 100%;
            height: auto;
            max-width: 300px; /* Maximale Breite der Bilder */
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .video-title {
            font-size: 1.1em;
            font-weight: bold;
            color: #333;
        }

    </style>
</x-app-layout>
