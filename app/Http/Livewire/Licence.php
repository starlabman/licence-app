<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\LicencePriceCalculate;

class Licence extends Component
{
     public  $teamSize = 2;

     //public  $amount = 30;

    // public function mount ()
    // {
    //     $this->amount = $this->calculateAmount($this->teamSize);
    // }
    // public function updatetTeamSize($name, $value)
    // {
        
    // }

    public function render()
    {
        return view('livewire.licence', [
           'amount' =>LicencePriceCalculate::calculatePrice($this->teamSize)
        ]);
    }
    // ≥ ou ⩾
    // ≤ ou ⩽
   
}
