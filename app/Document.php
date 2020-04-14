<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Document extends Model
{
    public function getFileAttribute() {
        return Storage::disk(config('voyager.storage.disk'))->url(json_decode($this->doc)[0]->download_link);
    }

    public function getFileSizeAttribute() {
        $bytes = Storage::disk('public')->size(json_decode($this->doc)[0]->download_link);
        return number_format($bytes / 1024 / 1024, 1)." МБ";
    }
}
