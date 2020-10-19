<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class billingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing()
    {
        return view('lawyer/billing');
    }
}
