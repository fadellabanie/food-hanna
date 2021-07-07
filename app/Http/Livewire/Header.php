<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.header',[
            'setting' => Setting::first(),

        ]);
    }
}
