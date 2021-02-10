<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //
    protected $table = 'tbl_billing';
    public function LegalCase()
    {

        return $this->belongsTo('App\LegalCase', "case_id");
    }
}
