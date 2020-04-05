<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collect;

class CollectsController extends Controller
{
    
    public function index() {

        $title = "Сборы";
        $collects = Collect::orderBy("updated_at")->paginate(16);

        $collects->each(function (Collect $collectItem) {
            $collectItem->setAttribute("percent", round(($collectItem->collected_money / $collectItem->needed_money) * 100));
            $collectItem->setAttribute("status", $collectItem->collected_money >= $collectItem->needed_money);
        });

        // dd($collects->pluck("fullname"));

        $data = [
            'title' => $title,
            'collects' => $collects,
        ];

        
        return view('collects.index', $data);
    }

    public function show($id) {

        $collect = Collect::findOrFail($id);
        $title = "$collect->fullname, $collect->year лет";
        
        $data = [
            'title' => $title,
        ];

        return view('collects.show', $data);
    }
}
