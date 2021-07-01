<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.footer',[
            'settings' => Setting::first(),
        ]);
    }
}
