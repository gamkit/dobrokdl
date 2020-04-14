<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    


    // Accessors

    public function getEmailAttribute($value) {
        if($value == null) {return "dobro.kdl@gmail.com";}
        else return $value;
    }

    public function getPhoneAttribute($value) {
        if($value == null) {return " 8 (928) 731-26-02";}
        else return $value;
    }

    public function getShortFullnameAttribute() {
        return mb_strimwidth($this->fullname, 0, 23, "...");
    }

    public function getShortPositionAttribute() {
        return mb_strimwidth($this->position, 0, 30, "...");
    }
}
