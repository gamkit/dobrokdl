<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    // 
    public function scopeLastNews($query, $count) {
        if($count == null) {
            return $query->where("status", "=", "published")->where("category_id", "=", 1)->orderBy("created_at", "desc")->take(20);
        }
        return $query->where("status", "=", "published")->where("category_id", "=", 1)->orderBy("created_at", "desc")->take($count);
    }

    // 
    public function scopeNews() {
        return Post::where("status", "published")->where("category_id", 1)->orderBy("created_at", "desc");
    }

    // 
    public function scopeMedianews() {
        return Post::where("status", "published")->where("category_id", 7)->orderBy("created_at", "desc");
    }

    // 
    public function scopeDonors() {
        return Post::where("status", "published")->where("category_id", 6)->orderBy("created_at", "desc");
    }

    // 
    public function scopeMediaAboutDonors() {
        return Post::where("status", "published")->where("category_id", 5)->orderBy("created_at", "desc");
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
