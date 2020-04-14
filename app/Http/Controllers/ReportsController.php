<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MediaReport;
use App\FinancialReport;

class ReportsController extends Controller
{
    public function index() {
        $title = "Отчеты";
        

        $data = [
            'title' => $title,
       
        ];
        

        return view('reports.index', $data);
    }


    public function media() {

        $title = "Фотоотчеты";
        $media_reports = MediaReport::orderBy("created_at")->get();

        $data = [
            'title' => $title,
            'media_reports' => $media_reports,
        ];
        


        return view('reports.media', $data);
    }
    
    public function mediaShow($id) {

        $media_report = MediaReport::findOrFail($id);
        $title = $media_report->created_at;

        $data = [
            'title' => $title,
            'media_report' => $media_report,
        ];
        
        // dd($media_report->images);


        return view('reports.media_show', $data);
    }

    // 

    public function financial() {
        
        $years_list = null;
        $min_year = 2015; 
        
        for ($i=0; $i < 10; $i++) {
            $flag = true;
            $min_year++;
            $years_list[$i] = [
                "label" => $min_year, 
                "disabled" => true,
            ];
        }
        

        $title = "Финансовые отчеты";

        
        $income = FinancialReport::where("report_type", "INCOME")->distinct()->get(["year"])->pluck('year');
        $waste = FinancialReport::where("report_type", "WASTE")->distinct()->get(["year"])->pluck('year');

        // ----------------------------------
        $income_reports =  $years_list;
        foreach($income_reports as $key => $value) {            
            $value["disabled"] = $income->every(function($item, $key) use ($value){
                return $value['label'] == $item ? false : true; 
            });
            $income_reports[$key] = $value;
        }

        // ----------------------------------
        $waste_reports =  $years_list;
        foreach($waste_reports as $key => $value) {            
            $value["disabled"] = $income->every(function($item, $key) use ($value){
                return $value['label'] == $item ? false : true; 
            });
            $waste_reports[$key] = $value;
        }



        $data = [
            'title' => $title,
            'income_reports' => $income_reports,
            'waste_reports' => $waste_reports,
        ];

        return view('reports.financial', $data);
    }



    // 

    public function getFinancialReports(Request $request) {

        $months_list = [
            0 => [
                "label" => "Январь", 
                "disabled" => true,
            ],
            1 => [
                "label" => "Февраль", 
                "disabled" => true,
            ],
            2 => [
                "label" => "Март", 
                "disabled" => true,
            ],
            3 => [
                "label" => "Апрель", 
                "disabled" => true,
            ],
            4 => [
                "label" => "Май", 
                "disabled" => true,
            ],
            5 => [
                "label" => "Июнь", 
                "disabled" => true,
            ],
            6 => [
                "label" => "Июль", 
                "disabled" => true,
            ],
            7 => [
                "label" => "Август", 
                "disabled" => true,
            ],
            8 => [
                "label" => "Сентябрь", 
                "disabled" => true,
            ],
            9 => [
                "label" => "Октябрь", 
                "disabled" => true,
            ],
            10 => [
                "label" => "Ноябрь", 
                "disabled" => true,
            ],
            11 => [
                "label" => "Декабрь", 
                "disabled" => true,
            ]
        ];
        
        $months = FinancialReport::where("year", $request->year)->where("report_type", strtoupper($request->report_type))->get();
        
        foreach($months_list as $key => $value) {
            
            $months->each(function($item, $index) use ($months_list, $key, &$value){
                if($item->month == $key) {
                    $value['disabled'] = false;
                    $value['file_link'] = $item->report_file;
                }
            });

            $months_list[$key] = $value;
        }
        
        // dd($months_list);
        
        if($request->ajax()) {
            return json_encode($months_list);
        }
    }
}
