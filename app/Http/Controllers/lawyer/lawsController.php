<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lawsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function laws()
    {
        return view('lawyer/laws');
    }
}
