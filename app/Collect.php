<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Collect extends Model
{

    // Актуальные сборы
    public function scopeUrgentCollects() {
        return Collect::whereColumn('collected_money', '<', 'needed_money');
    }

    // Вернуть n-количество последних редаактированных сборов
    public function scopeSomeCollects($query, $count) {
        return $query->orderBy("updated_at")->take($count);
    }

  


   
}
