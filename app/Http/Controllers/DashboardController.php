<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Download;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $activities = ActivityLog::with('document')->orderBy('id', 'desc')->limit(5)->get();  
        $download = Download::with('document')->orderBy('id', 'desc')->limit(5)->get();
        return view('home', [
            'activities' => $activities,
            'downloads' => $download
        ]);
    }
}
