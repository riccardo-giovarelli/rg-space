<?php

function getUrl()
{
    $apiKey = 'dehh1YxvjaSLkrYjQ5ObRrVs0mO3FXUs4fJLiw9x';
    $url = 'https://api.nasa.gov/planetary/apod?api_key=' . $apiKey;
    return $url;
}


function getApodData()
{
    $apodData = json_decode(file_get_contents(getUrl()), true);
    $apodData['date'] = date('d/m/Y', strtotime($apodData['date']));

    return $apodData;
}
