<?php

function html_end_tag_by_start_tag(string $start_tag): string
{
    preg_match("/(?<=<)\w+(?=>|\s)/", $start_tag, $matches);

    return "</" . $matches[0] . ">";
}

