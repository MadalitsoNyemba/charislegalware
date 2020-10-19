<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function forms()
    {
        return view('lawyer/forms');
    }
}
