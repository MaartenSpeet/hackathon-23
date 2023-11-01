<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::whereBetween('level', [1, 4])->latest('updated_at')->paginate(10);
        return view('logs')->with('logs', $logs);
    }
}
