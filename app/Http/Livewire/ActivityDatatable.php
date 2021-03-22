<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Billing;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
   


class ActivityDatatable extends LivewireDatatable
{
    public $model = Billing::class;
    public function columns()
    {
        return [

            // NumberColumn::name('id')
            //     ->label('ID')
            //     ->sortBy('id','desc'),
   
            Column::name('activity_name')
                ->label('Activity Name'),
   
            Column::name('duration'),
   
            DateColumn::name('created_at')
                ->label('Creation Date')
        ];
    }
    
}
