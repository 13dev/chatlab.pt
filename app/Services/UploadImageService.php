<?php

namespace App\Services;

use Illuminate\Http\File;
use Illuminate\Support\Facades\File as FileFacade;
use Illuminate\Support\Str;

class UploadImageService
{
    public function __invoke(File $file, string $path)
    {
        $name = Str::uuid().'.'.$file->extension();
        FileFacade::ensureDirectoryExists($path);
        $file->move($path, $name);

        return $name;
    }
}
