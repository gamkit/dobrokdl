<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    public function scopeLastPosts($query, $count) {
        if($count == null) {
            return $query->orderBy("created_at", "desc")->where("status", "=", "published")->take(20);
        }
        return $query->orderBy("created_at", "desc")->where("status", "=", "published")->take($count);
    }


    // Accessors
    public function getShortTitleAttribute() {
        if($this->title == null) {return "...";}
        return mb_strimwidth($this->title, 0, 22, "...");
    }

    public function getShortAnotationAttribute() {
        return mb_strimwidth(strip_tags($this->body), 0, 100, "...");
    }
    
    public function getCreatedAtAttribute($value) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d.m.Y');
    }

 
}
