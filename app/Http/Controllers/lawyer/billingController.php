<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Billing;
use App\LegalCase;

class billingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function billing()
    {
        $data = [];
        $data['billings'] = Billing::with('LegalCase')->get();
        // dd($data);
        return view('lawyer/billing',$data);
    }
}
