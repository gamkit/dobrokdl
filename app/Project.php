<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Project extends Model
{
    
    public function scopeProjects() {
        return Project::where("type", "=", "PROJECT");
    }

    public function scopePrograms() {
        return Project::where("type", "=", "PROGRAM");
    }



    // 
    public function getDateAttribute($value) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d.m.Y'); 
    }


    public function getProjectTypeAttribute($value) {
        if($this->type == "PROGRAM") { $value = "Программа"; }
        else if($this->type == "PROJECT") { $value = "Проект";}
        else { $value = null;}
        return $value;
    }
}
