<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class VolProfile extends Model
{
    protected $fillable = [
            'full_name' ,
    		'born' ,
    		'phone' ,
    		'email' ,
    		'address' ,
    		'occupation' ,
    		'targets' ,
    		'experience' ,
    		'programs' ,
    		'favours' ,
    		'positions' ,
    ];




    public function setProgramsAttribute($value) {
        if(!empty($value)) {
            $this->attributes['programs'] = implode("<br/> &#10004; ", $value);
        }
    }

    public function setTargetsAttribute($value) {
        if(!empty($value)) {
            $this->attributes['targets'] = implode("<br/> &#10004; ", $value);
        }
    }

    public function setFavoursAttribute($value) {
        if(!empty($value)) {
            $this->attributes['favours'] = implode("<br/> &#10004; ", $value);
        }
    }

    public function setPositionsAttribute($value) {
        if(!empty($value)) {
            $this->attributes['positions'] = implode("<br/> &#10004; ", $value);
        }
    }


}
