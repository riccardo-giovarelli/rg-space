<?php

namespace App\Library\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ApodApi
{
    protected $url;
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = 'dehh1YxvjaSLkrYjQ5ObRrVs0mO3FXUs4fJLiw9x';
        $this->url = 'https://api.nasa.gov/planetary/apod?api_key=' . $this->apiKey;
    }

    private function getApodData()
    {
        $response = Http::get($this->url);
        return $response->json();
    }

    private function getCachedApodData()
    {
        if (!Cache::has('apodData')) {
            Cache::add('apodData', $this->getApodData(), now()->addMinutes(30));
        }

        return Cache::get('apodData');
    }

    public function getApod()
    {
        return $this->getCachedApodData();
    }
}
