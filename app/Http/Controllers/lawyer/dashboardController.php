<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       public function index()
    {
        return view('lawyer/dashboard');
    }


    public function fileManagement()
    {
        return view('lawyer/fileManagement');
    }
}
