<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Collect extends Model
{

    // Актуальные сборы
    public function scopeUrgentCollects() {
        return Collect::whereColumn('collected_money', '<', 'needed_money')->where("quickly_collect", "=", 1);
    }

    // Вернуть n-количество последних редаактированных сборов
    public function scopeSomeCollects($query, $count) {
        return $query->orderBy("updated_at")->take($count);
    }


    // Accessors

    public function getPercentAttribute() {
        return round(($this->collected_money / $this->needed_money) * 100);
    }

    public function getStatusAttribute() {
        return $this->collected_money >= $this->needed_money;
    }



   

  


   
}
