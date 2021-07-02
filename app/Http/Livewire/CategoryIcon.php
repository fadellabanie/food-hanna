<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class CategoryIcon extends Component
{
    public $setting;
    public $category;
     public function mount()
    {
        $this->setting = Setting::select($this->category)->first();
    }
    public function render()
    {
      

        return <<<'blade'
            <div>
            <img src="{{asset($this->setting->dutso)}}" class="position-absolute slider-logo">
            </div>
        blade;
    }
}
