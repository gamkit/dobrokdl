<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class VideoReport extends Model
{
    

    public function getVideoIdAttribute() {
        $link = explode('=', $this->link); 
        return $link[count($link) - 1];
    }
}
