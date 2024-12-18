<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){

        $lat1=48.8566;
        $long1=2.3522;
        $query=Alert::query();
        $tab=[];
        $query=$query->orderBy('created_at','desc')->get();
            foreach($query as $q){
                $tp=round(CalculeDistance($lat1,$long1,$q->latitude,$q->longitude));
                if($tp>300){
                    $tab[]=$q;
                }
            }
            // header('Content-Type: application/json');
            json_encode($tab);
            dd(($tab));
    // ->where(CalculeDistance($lat1,$long1, $query->select('latitude')->limit(1)->get(), $query->select('longitude')->get(),'>',3));
    // dd($query);
    
    // ->select('longitude','latitude')->take(2)->get();
    // dd($query['longitude']);
    }
   
}

