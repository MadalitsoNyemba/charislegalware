<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class researchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function research()
    {
        return view('lawyer/research');
    }
}
