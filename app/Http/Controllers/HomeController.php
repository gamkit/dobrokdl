<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collect;

class HomeController extends Controller
{
    public function index() {
        
        $title = "Главная";
        $urgentCollects = Collect::urgentCollects()->get();
        $collects = Collect::someCollects(12)->get()->merge($urgentCollects)->reverse();

        $collects->each(function (Collect $collectItem) {
            $collectItem->setAttribute("percent", round(($collectItem->collected_money / $collectItem->needed_money) * 100));
            $collectItem->setAttribute("status", $collectItem->collected_money >= $collectItem->needed_money);
        }); 

        $data = [
            'title' => $title,
            'collects' => $collects,
        ];

        return view('home', $data);
    }
}
