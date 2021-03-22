<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //
    protected $table = 'tbl_billing';
    protected $fillable = [
        'case_id', 'activity_name', 'duration', 'VAT', 'start_time', 'end_time', 'levy'
    ];
    public function LegalCase()
    {

        return $this->belongsTo('App\LegalCase', "case_id");
    }
}
