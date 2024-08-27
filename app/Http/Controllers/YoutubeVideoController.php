<?php

namespace App\Http\Controllers;

use App\Models\YoutubeVideo;
use Illuminate\Http\Request;

class YoutubeVideoController extends Controller
{
    public function index()
    {
        $videos = YoutubeVideo::all();

        return view('aktuell', ['videos' => $videos]);
    }
}
