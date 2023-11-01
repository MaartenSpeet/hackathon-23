<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index()
    {
        $data = Log::all();

        return view('logs', ['logs' => $data]);
    }

    public function getLogData()
    {

    }

    public function decodeJson($logdata)
    {
        $jsonobject = $logdata;
        $phpobject = json_decode($jsonobject);
        return $phpobject;
    }
}
