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

if ( ! function_exists('formatBytes')) {
    function formatBytes($size, $precision = 2)
    {
        $base = log((float) $size, 1024);
        $suffixes = ['', 'K', 'M', 'G', 'T'];

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }
}

if (! function_exists('upload')) {
    function upload($path)
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