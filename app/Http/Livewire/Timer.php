<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Billing;

class Timer extends Component
{
    public $activity_name;
    public $showStart = true;
    public function render()
    {
        $data = [];
        $data['billings'] = Billing::with('LegalCase')->get();
        return view('livewire.timer',$data);
    }

    public function addActivity()
    {
        $this->showStart =   false;
        Billing::create([
            'case_id' => 1,
            'activity_name' => $this->activity_name,
            'duration' => 0,
            'VAT' => 16.50,
            'levy' => 1.00,
            'start_time' => date("h:i:s"),
            'end_time' => "00:00:00"
        ]);
        $this->emit('refreshLivewireDatatable');
    }
    public function stopActvity()
    {
        $this->showStart =   true;


    }
}
