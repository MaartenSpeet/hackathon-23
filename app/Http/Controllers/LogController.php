<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    function index(){

    }

    function getLogData(){

    }

    function decodeJson($logdata){
        $jsonobject = $logdata;
        $phpobject = json_decode($jsonobject);
        return $phpobject;
    }
}
