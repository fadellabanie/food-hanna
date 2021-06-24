<?php

namespace App\Support;

trait HFUpload
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

    public function filename()
    {
        $name = sha1(time() . $this->file->getClientOriginalName());
        $extension = $this->file->getClientOriginalExtension();

        return "{$name}.{$extension}";
    }

    public function uplaod()
    {
        $this->file->move(public_path() . '/' . $this->uploadPath(), $this->filename());

        return $this->uploadPath() . '/' . $this->filename();
    }
}
