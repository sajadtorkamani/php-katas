<?php

function makeYoutubeLink(string $str): string
{
    $videoId = getYoutubeVideoIdFromUrl($str);

    return "https://www.youtube.com/embed/{$videoId}";
}

/*
 * TODO: Should probably use a simpler regex solution.
 * */
function getYoutubeVideoIdFromUrl(string $url): string
{
    $urlParts = parse_url($url);

    // Handle links with the ID as a query param
    if (array_key_exists('query', $urlParts)) {
        parse_str($urlParts['query'], $queryParams);

        return reset($queryParams);
    }

    // Handle links with ID as a URL segment
    $pathSegments = explode('/', $url);

    return end($pathSegments);
}
