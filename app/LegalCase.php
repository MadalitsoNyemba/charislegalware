<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    //
    protected $table = 'tbl_cases';

    public function Billing()
    {

        return $this->hasMany('App\Billing', "case_id");
    }

}
