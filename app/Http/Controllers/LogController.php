<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::where('level', 1)->latest('updated_at')->paginate(5);
        return view('logs')->with('logs', $logs);
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
