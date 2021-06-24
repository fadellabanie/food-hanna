<?php

namespace App\Support;

use Illuminate\Support\Facades\Storage;

class HFUpload
{
    protected $folder;
    protected $file;

    public function __construct($file)
    {
        $this->file($file);
    }

    public static function make($file)
    {
        return new static($file);
    }

    public function file($file)
    {
        $this->file = $file;

        return $this;
    }

    public function folder($folder)
    {
        $this->folder = $folder;

        return $this;
    }

    public function uploadPath()
    {
        $uploadPath = 'uploads/' . $this->folder;

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        return $uploadPath;
    }

    public function upload()
    {
        return Storage::disk('public')->put($this->uploadPath(), $this->file);
    }
}
