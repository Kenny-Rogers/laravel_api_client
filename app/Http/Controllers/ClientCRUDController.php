<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientCRUDController extends Controller
{
    //
    public function loadData($url=""){
        $url = $url;
        $curl = curl_init(); //initialize curl
        curl_setopt($curl, CURLOPT_URL, $url); //setting options -> set url
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //return results as a string 
        $output = curl_exec($curl); // get returned string
        curl_close($curl); // close resource
        echo $output;
    }

    public function fetchData()
}
