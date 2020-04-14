<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class FinancialReport extends Model
{
    public function getReportFileAttribute() {
        return Storage::disk(config('voyager.storage.disk'))->url(json_decode($this->file)[0]->download_link);
    }
}
