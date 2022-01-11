<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media as MediaLib;

class Media extends MediaLib
{
    protected $table = 'media';

    public static function fileNameSanitizer(): \Closure
    {
        return function (string $fileName): string {
            return Str::uuid() . "." . pathinfo($fileName)['extension'];
        };
    }
}

