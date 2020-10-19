<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class calendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function calendar()
    {
        return view('lawyer/calendar');
    }
}
