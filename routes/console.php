<?php

use App\Models\YoutubeVideo;
use App\Services\YouTubeService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::call(function () {
    $youtubeService = new YouTubeService();
    $videos = $youtubeService->getChannelVideos();

    foreach ($videos as $video) {
        $title = $video->snippet->title;
        $thumbnailsHigh = $video->snippet->thumbnails->high->url;
        $url = 'https://www.youtube.com/watch?v=' . $video->id->videoId;

        if (!YoutubeVideo::where('url', $url)->exists()) {
            YoutubeVideo::create([
                'title' => $title,
                'thumbnails_high' => $thumbnailsHigh,
                'url' => $url,
            ]);
        }
    }
})->everyThirtySeconds();
