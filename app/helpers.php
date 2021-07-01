<?php

use Illuminate\Support\HtmlString;

if (! function_exists('svg')) {
    function svg($filename)
    {
        return new HtmlString(
            file_get_contents(resource_path("svg/{$filename}.svg"))
        );
    }
}

if (! function_exists('formatDate')) {
    function formatDate($date)
    {
        return date('d M Y', strtotime($date));
    }
}

if (! function_exists('upload')) {
    function upload($path,$file)
    {
        $baseDir = 'uploads/' . $path;

        if (!file_exists($baseDir)) {
            mkdir($baseDir, 0777, true);
        }

        $name = sha1(time() . $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName = "{$name}.{$extension}";
    }
}