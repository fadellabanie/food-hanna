<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Socal extends Component
{
    public function render()
    {
        return view('livewire.socal',[
            'settings' => Setting::first(),
        ]);
    }
   
}
