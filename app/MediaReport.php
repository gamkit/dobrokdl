<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MediaReport extends Model
{
    public function getCreatedAtAttribute($value) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d.m.Y');
    }
    
    
    public function getImagesAttribute($value) {
        return json_decode($value, true) ;
    }

    
}
