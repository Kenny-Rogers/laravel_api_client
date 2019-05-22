<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientCRUDController extends Controller
{
    //function to loadData from USGS server given the query params
    private function loadData($urlParams=""){
        $url = "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&{$urlParams}";
        $curl = curl_init(); //initialize curl
        curl_setopt($curl, CURLOPT_URL, $url); //setting options -> set url
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //return results as a string 
        $output = curl_exec($curl); // get returned string
        curl_close($curl); // close resource
        return $output;
    }

    //route to fetchData within a given time range
    public function fetchData(){
        $startDate = request('starttime')??'2019-05-01';
        $endDate = request('endtime')??'2019-05-02';
        $result = $this->loadData("starttime={$startDate}&endtime={$endDate}");
        return view('dataview', [
            'startDate' => $startDate,
            'endDate' => $endDate,
            'result' => $result
            ]);
    }

    public function home(){
        return view('welcome');
    }
}
