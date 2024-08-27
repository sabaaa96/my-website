<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

class YouTubeService
{
    protected $client;
    protected $youtube;
    private string $channelId;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Laravel YouTube API Integration');
        $this->client->setDeveloperKey(env('YOUTUBE_API_KEY')); // Deine API-Schlüssel aus der .env
        $this->youtube = new Google_Service_YouTube($this->client);
        $this->channelId = env('YOUTUBE_CHANNEL_ID');
    }

    public function getChannelVideos()
    {
        try {
            $response = $this->youtube->search->listSearch('snippet', [
                'channelId' => $this->channelId,
                'order' => 'date',
                'maxResults' => 50,
            ]);

            return $response->items;
        } catch (\Exception $e) {
            \Log::error('YouTube API error: ' . $e->getMessage());
            return [];
        }
    }
}
